<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Feedback - Cybersecurity Awareness Game</title>
  <link rel="stylesheet" href="styles.css">
</head>

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

</style>


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

  <main>
    <h2>Feedback & Evaluation</h2>

    <section>
      <h3>We Value Your Input</h3>
      <p>Your feedback helps us improve the game and better serve our users. Please share your thoughts, suggestions, or any issues you encountered.</p>
    </section>

    <section>
      <h3>Submit Feedback</h3>
      <form action="connectfeedback.php" method="post" >
        <label for="name">Name (optional):</label><br>
        <input type="text" id="username" name="name"><br><br>

        <label for="email">Email (optional):</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="message">Your Feedback:</label><br>
        <textarea id="message" name="message" rows="6" cols="40" required></textarea><br><br>

        <button type="submit">Submit</button>
      </form>
   
    </section>



<a class="btn" href="module2.php">← Back to Home</a>
  </main>

  <footer>
    <p>&copy;  2025 Cybersecurity Awareness Game Project By Ali Haider </p>
  </footer>
</body>
</html>
