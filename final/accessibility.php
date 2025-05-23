<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Accessibility - Cybersecurity Awareness Game</title>
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
    <h2>Accessibility</h2>

    <section>
      <h3>Inclusive Design Principles</h3>
      <p>We believe cybersecurity education should be accessible to everyone. Our game is designed using principles of universal design and meets common accessibility standards.</p>
    </section>

    <section>
      <h3>Device Compatibility</h3>
      <ul>
        <li>Optimized for desktops, tablets, and smartphones.</li>
        <li>Responsive layout adjusts seamlessly to different screen sizes.</li>
        <li>Minimal use of heavy animations for performance and clarity.</li>
      </ul>
    </section>

    <section>
      <h3>Accessibility Features</h3>
      <ul>
        <li>Keyboard navigation support.</li>
        <li>Alt text for all images.</li>
        <li>Readable font sizes and high contrast color scheme.</li>
        <li>Semantic HTML structure for screen readers.</li>
        <li>Simple language and clean interface to aid cognitive accessibility.</li>
      </ul>
    </section>

    <section>
      <h3>Future Enhancements</h3>
      <ul>
        <li>Text-to-speech options.</li>
        <li>Language translation support.</li>
        <li>Dark mode and user-adjustable themes.</li>
      </ul>
    </section>

<a class="btn" href="module2.php">← Back to Home</a>
  </main>

  <footer>
    <p>&copy; 2025 Cybersecurity Awareness Game Project By Ali Haider From Iub </p>
  </footer>
</body>
</html>
