<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register - Cybersecurity Game</title>
  <link rel="stylesheet" href="styles.css" />
  <style>


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


    .btnabc {
    display: inline-block;
    padding: 0.75rem 1.25rem; /* Adjusted padding for a more substantial button */
    background-color: #0074cc; /* Primary button color */
    color: white; /* Text color */
    text-decoration: none; /* No underline */
    border: none; /* No border */
    border-radius: 6px; /* Rounded corners */
    font-size: 1rem; /* Font size */
    font-weight: bold; /* Bold text */
    cursor: pointer; /* Pointer cursor on hover */
    transition: background-color 0.3s ease; /* Smooth transition for hover effect */
    margin-top: 1rem; /* Space above the button */
    width: 100%; /* Full width for buttons in forms */
}
.btnabc:hover {
    background-color: #005fa3; /* Darker shade on hover */
}



    .switch-link { text-align:center; margin-top:1rem; }
    .switch-link a { color:#0074cc; text-decoration:none; font-weight:bold; }
    .switch-link a:hover { text-decoration:underline; }


  </style>
</head>
<body>
  <header>
    <h1>Cybersecurity Awareness Game</h1>
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

  <main class="form-container">
    <h2>Register</h2>
    <form id="registerForm"  action="connect.php" method="post"  >
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName"  required />

      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName" required />

      <label>Gender:</label>
      <div class="gender-options">
        <label><input type="radio" name="gender" value="Male" required /> Male</label>
        <label><input type="radio" name="gender" value="Female" /> Female</label>
        <label><input type="radio" name="gender" value="Other" /> Other</label>
      </div>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required />

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required minlength="6" />

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}" />

 <div class="switch-link">
      Don't have an account? <a href="login.php">login here</a>
    </div>
      <button type="submit" class="btn">Submit</button>

     

    </form>
  </main>

  <footer>
    <p>&copy; 2025 Cybersecurity Awareness Game Project By Ali Haider From Iub </p>
  </footer>

  
</body>
</html>