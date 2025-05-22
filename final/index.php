<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cybersecurity Awareness Game</title>
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
    <section class="intro">
      <h2>Welcome to the Cybersecurity Awareness Game</h2>
      <p>Learn how to stay safe online through fun, interactive training modules covering real-world cyber threats.</p>
      <a class="btn" href="module2.php">Start Learning</a>
    </section>

    <section class="audiences">
      <h3>Who is this for?</h3>
      <ul>
        <li><strong>Students:</strong> Build early cybersecurity habits.</li>
        <li><strong>Employees:</strong> Reduce workplace security risks.</li>
        <li><strong>General Public:</strong> Learn to browse safely and confidently.</li>
        <li><strong>Organizations:</strong> Train teams effectively and affordably.</li>
      </ul>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Cybersecurity Awareness Game Project By Ali Haider From Iub </p>
  </footer>
  
</body>





</html>
