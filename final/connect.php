<?php
// Show all errors
ini_set('display_errors', 1);
error_reporting(E_ALL);




// Get form values
$firstName = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
$lastName  = isset($_POST['lastName']) ? trim($_POST['lastName']) : '';
$gender    = isset($_POST['gender']) ? trim($_POST['gender']) : '';
$email     = isset($_POST['email']) ? trim($_POST['email']) : '';
$password  = isset($_POST['password']) ? $_POST['password'] : '';
$number    = isset($_POST['phone']) ? trim($_POST['phone']) : '';

// Check if all fields are filled
if (empty($firstName) || empty($lastName) || empty($gender) || empty($email) || empty($password) || empty($number)) {
    die('Please complete all required fields.');
}

// DB Connection
$conn = new mysqli('localhost', 'root', '', 'test1');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Hash password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Fix column name: use 'number' not 'phone'
$stmt = $conn->prepare("INSERT INTO registration (firstName, lastName, gender, email, password, number) VALUES (?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

// Bind and execute
$stmt->bind_param("ssssss", $firstName, $lastName, $gender, $email, $hashedPassword, $number);


if ($stmt->execute()) {
    echo "Registration successful!<br><br>";
    echo '<a href="registration.php" class="btnabc">Go back to registration Form</a> <br><br> ';
    echo '<a href="registered.php" class="btnabc">Go to Registered Form</a>';
} else {
    echo "Error during registration: " . htmlspecialchars($stmt->error);
}


// Close
$stmt->close();
$conn->close();
?>
