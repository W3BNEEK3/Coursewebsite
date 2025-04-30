<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Design Course</title>
  <link rel="stylesheet" href="styles.css">
</head>
<?php session_start(); ?>
<?php include 'header.php'; ?>
<body class="dashboard-body">
<div class="container">
  <div class="hero-container">
    <h1 class="index_h1">Welcome to Dev Course</h1>
    <p class="hero-subtitle">
      Your one-stop platform for mastering web development. Explore courses in HTML, CSS, JavaScript, PHP, and SQL, tailored for all skill levels.
    </p>
    <div class="hero-buttons">
      <a href="dashboard.php" class="btn">Explore Courses</a>
      <a href="contact.php" class="btn">Contact Us</a>
    </div>
  </div>
  <div class="features-section">
    <h2>What We Offer</h2>
    <div class="features-grid">
      <div class="feature-card fade-in-up">
        <h3>Comprehensive Courses</h3>
        <p>Learn web development from scratch with beginner to expert-level courses.</p>
      </div>
      <div class="feature-card fade-in-up">
        <h3>Expert Instructors</h3>
        <p>Get guidance from industry professionals with years of experience.</p>
      </div>
      <div class="feature-card fade-in-up">
        <h3>Flexible Learning</h3>
        <p>Learn at your own pace with lifetime access to all course materials.</p>
      </div>
    </div>
  </div>
</div>
<script src="script.js"></script>
</body>
</html>
