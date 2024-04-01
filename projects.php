<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $projectName = htmlspecialchars($_POST['projectName']);
    $projectDescription = htmlspecialchars($_POST['projectDescription']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Projects</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
</header>
<main>
    <section id="projects">
        <h2>Current Projects</h2>
        <p>Here are some of our flagship projects:</p>
        <ul>
            <li>Project Alpha: A cutting-edge software development project.</li>
            <li>Project Beta: An innovative data analysis project.</li>
            <li>Project Gamma: A comprehensive IT consulting service.</li>
        </ul>
        <h3>Submit Your Project Idea</h3>
        <form method="POST" action="projects.php">
            <input type="text" name="projectName" placeholder="Project Name" required>
            <textarea name="projectDescription" placeholder="Project Description" required></textarea>
            <input type="submit" value="Submit Project">
        </form>
    </section>
</main>
</body>
</html>
