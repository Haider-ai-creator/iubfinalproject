

<?php
session_start();

// Database connection
$conn = new mysqli('localhost', 'root', '', 'test1');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$mode = $_GET['mode'] ?? 'login';  // mode=login or mode=register
$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($mode === 'register') {
        // Registration logic
        $firstName = trim($_POST['firstName'] ?? '');
        $lastName = trim($_POST['lastName'] ?? '');
        $gender = trim($_POST['gender'] ?? '');
        $email = strtolower(trim($_POST['email'] ?? ''));
        $password = $_POST['password'] ?? '';
        $phone = trim($_POST['phone'] ?? '');

        if (!$firstName || !$lastName || !$gender || !$email || !$password || !$phone) {
            $error = "Please complete all required fields.";
        } else {
            // Check if email already exists
            $stmt = $conn->prepare("SELECT id FROM registration WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $error = "Email already registered.";
            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $stmt->close();

                $stmt = $conn->prepare("INSERT INTO registration (firstName, lastName, gender, email, password, number) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssss", $firstName, $lastName, $gender, $email, $hashedPassword, $phone);

                if ($stmt->execute()) {
                    $success = "Registration successful! You can now <a href='?mode=login'>login</a>.";
                } else {
                    $error = "Database error: " . $stmt->error;
                }
            }
            $stmt->close();
        }
    } elseif ($mode === 'login') {
        // Login logic
        $email = strtolower(trim($_POST['email'] ?? ''));
        $password = $_POST['password'] ?? '';

        if (!$email || !$password) {
            $error = "Please fill all fields.";
        } else {
            $stmt = $conn->prepare("SELECT id, password FROM registration WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows === 1) {
                $stmt->bind_result($id, $hashedPassword);
                $stmt->fetch();

                if (password_verify($password, $hashedPassword)) {
                    $_SESSION['user_id'] = $id;
                    $_SESSION['email'] = $email;
                    header("Location: welcome.php");
                    exit;
                } else {
                    $error = "Incorrect password.";
                }
            } else {
                $error = "Email not registered.";
            }
            $stmt->close();
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cybersecurity Game - <?php echo ucfirst($mode); ?></title>
  <style>
    * { margin:0; padding:0; box-sizing: border-box; }
    body { font-family: Arial, sans-serif; background:#f9f9f9; color:#333; line-height:1.6; }
    header { background:#004080; color:#fff; padding:1rem;  }
    main { max-width: 500px; margin: 2rem auto; padding: 2rem; background:#e3e3e3; border-radius:8px; box-shadow:0 0 10px rgba(0,0,0,0.1);}
    h2 { text-align:center; margin-bottom:1rem;}
    label { display:block; margin-top:1rem; font-weight:bold;}
    input[type=text], input[type=email], input[type=password], input[type=tel] {
      width:100%; padding:0.5rem; margin-top:0.3rem; border:1px solid #ccc; border-radius:4px;
    }
    .btn {
      margin-top:1.5rem; width:100%; padding:0.75rem; background:#0074cc; color:#fff; border:none; border-radius:6px; font-size:1rem; cursor:pointer;
    }
    .btn:hover { background:#005fa3; }
    .error { color:red; text-align:center; margin-top:1rem; }
    .success { color:green; text-align:center; margin-top:1rem; }
    .switch-link { text-align:center; margin-top:1rem; }
    .switch-link a { color:#0074cc; text-decoration:none; font-weight:bold; }
    .switch-link a:hover { text-decoration:underline; }
    .gender-options label { margin-right: 1rem; font-weight: normal; }


       * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f9f9f9;
  color: #333;
  line-height: 1.6;
}

header {
  background-color: #004080;
  color: #fff;
  padding: 1rem;
}

header h1 {
  margin-bottom: 0.5rem;
}

nav ul {
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
}

nav a {
  color: #fff;
  text-decoration: none;
  font-weight: bold;
}

nav a:hover {
  text-decoration: underline;
}

main {
  padding: 2rem;
}

.intro {
  margin-bottom: 2rem;
}

.btn {
  display: inline-block;
  padding: 0.6rem 1rem;
  background-color: #0073e6;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  margin-top: 1rem;
}

.btn:hover {
  background-color: #005bb5;
}

.audiences ul {
  margin-top: 1rem;
  list-style: disc;
  padding-left: 1.5rem;
}

footer {
  background-color: #eaeaea;
  text-align: center;
  padding: 1rem;
  margin-top: 2rem;
}



    .form-container {
      max-width: 500px;
      margin: 2rem auto;
      padding: 2rem;
      background-color: #e3e3e3;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
    }
    label {
      display: block;
      margin-top: 1rem;
      font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="tel"] {
      width: 100%;
      padding: 0.5rem;
      margin-top: 0.3rem;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .gender-options {
      margin-top: 0.5rem;
    }
    .btn {
      margin-top: 1.5rem;
      width: 100%;
      padding: 0.75rem;
      background-color: #0074cc;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #005fa3;
    }

    
nav ul {
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  
}



  </style>
</head>
<body>
  <header><h1>Cybersecurity Awareness Game - <?php echo ucfirst($mode); ?></h1>

   <nav>
      <ul>
       <li><a href="index.php">Home</a></li>
        <li><a href="module2.php">Modules</a></li>
        <li><a href="teacherdashboard.php">Teacher dashboard</a></li>
        <li><a href="studentquizsection.php">Student Quiz Section</a></li>
        <li><a href="Gamification.php">Gamification</a></li>
        <li><a href="accessibility.php">Accessibility</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="registration.php">Register</a></li>
         <li><a href="registered.php">Registered</a></li>
      </ul>
    </nav>

</header>
   
  <main>
    <?php if ($mode === 'register'): ?>
    <form method="post" action="?mode=register">
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName" required>

      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName" required>

      <label>Gender:</label>
      <div class="gender-options">
        <label><input type="radio" name="gender" value="Male" required> Male</label>
        <label><input type="radio" name="gender" value="Female"> Female</label>
        <label><input type="radio" name="gender" value="Other"> Other</label>
      </div>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" minlength="6" required>

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>

      <button type="submit" class="btn">Register</button>
    </form>
    <div class="switch-link">
      Already have an account? <a href="?mode=login">Login here</a>
    </div>

    <?php elseif ($mode === 'login'): ?>
    <form method="post" action="?mode=login">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit" class="btn">Login</button>
    </form>
    <div class="switch-link">
      Don't have an account? <a href="?mode=register">Register here</a>
    </div>
    <?php endif; ?>

    <?php if ($error): ?>
      <p class="error"><?php echo $error; ?></p>
    <?php elseif ($success): ?>
      <p class="success"><?php echo $success; ?></p>
    <?php endif; ?>
  </main>
</body>
</html>
