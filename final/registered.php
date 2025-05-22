
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test1";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM registration";
$result = mysqli_query($conn, $sql);
$total_users = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registered Users</title>
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
          padding: 2rem;
        }

        h2 {
          margin-bottom: 1rem;
          color: #004080;
        }

        .count {
          font-size: 18px;
          margin-bottom: 1.5rem;
          font-weight: bold;
        }

        table {
          width: 100%;
          border-collapse: collapse;
          background: #fff;
          box-shadow: 0 0 10px rgba(0,0,0,0.1);
          border-radius: 8px;
          overflow: hidden;
        }

        th, td {
          padding: 12px 15px;
          border: 1px solid #ddd;
          text-align: left;
        }

        th {
          background-color: #0073e6;
          color: #fff;
        }

        tr:nth-child(even) {
          background-color: #f2f2f2;
        }

        .btn {
          display: inline-block;
          padding: 0.6rem 1rem;
          background-color: #0074cc;
          color: white;
          border: none;
          border-radius: 6px;
          cursor: pointer;
          text-decoration: none;
          margin-top: 1rem;
        }

        .btn:hover {
          background-color: #005fa3;
        }


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


    .dashboard {
      margin-top: 2rem;
    }
    .question-form {
      margin-bottom: 2rem;
    }
    .btn {
      padding: 0.5rem 1rem;
      background-color: #0074cc;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #005fa3;
    }
    .question-box {
      background: #f4f4f4;
      padding: 1rem;
      border-radius: 8px;
      margin-bottom: 1rem;
    }
    label {
      display: block;
      margin-top: 0.5rem;
    }


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

<h2>Registered Users</h2>
<div class="count">Total Registered Users: <?php echo $total_users; ?></div>





<?php if ($total_users > 0): ?>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone Number</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id']); ?></td>
                <td><?php echo htmlspecialchars($row['firstName']); ?></td>
                <td><?php echo htmlspecialchars($row['lastName']); ?></td>
                <td><?php echo htmlspecialchars($row['gender']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td><?php echo htmlspecialchars($row['number']); ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
<?php else: ?>
    <p>No users registered yet.</p>
<?php endif; ?>

</body>
</html>
