<?php 
session_start();

// Display the welcome message only if the user is logged in
if (isset($_SESSION['user'])) {
    echo "<h1 class='welcome-message'>Welcome, " . htmlspecialchars($_SESSION['user']['fullname']) . "</h1>";
    echo "<a href='logout.php' class='btn logout-btn'>Logout</a>";
}
?>
<?php include 'header.php'; ?>
<body class="dashboard-body">
<div class="container">
  <h1>Available Courses</h1>
  <div class="course-grid">
    <!-- HTML Course -->
    <div class="course-card">
      <img src="https://media.licdn.com/dms/image/v2/C4E12AQES2SPbxCQi9w/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1590410787863?e=2147483647&v=beta&t=DYi7hOnGiTyVVXBjnCmUiMPPzQJwfJ1Lw68scOZd6Ko" alt="HTML Course">
      <div class="course-card-content">
        <h3>HTML Fundamentals</h3>
        <p>Learn the building blocks of the web: elements, tags, and semantic markup.</p>
        <a href="htmlCourse.php" class="btn">Start Learning</a>
      </div>
    </div>
    <!-- CSS Course -->
    <div class="course-card">
      <img src="https://i0.wp.com/css-tricks.com/wp-content/uploads/2024/10/css3-logo.jpg?resize=768%2C384&ssl=1" alt="CSS Course">
      <div class="course-card-content">
        <h3>CSS Styling & Layout</h3>
        <p>Master Flexbox, Grid, responsive design, and modern CSS techniques.</p>
        <a href="cssCourse.php" class="btn">Start Learning</a>
      </div>
    </div>
    <!-- JavaScript Course -->
    <div class="course-card">
      <img src="https://arielfuggini.com/static/29a9f86a9bd7efd96ee9ce8b13124303/a41d1/javascript.jpg" alt="JavaScript Course">
      <div class="course-card-content">
        <h3>JavaScript Essentials</h3>
        <p>Understand variables, functions, DOM manipulation, and async programming.</p>
        <a href="course.php?lang=js" class="btn">Start Learning</a>
      </div>
    </div>
    <!-- Extra: PHP Course -->
    <div class="course-card">
      <img src="https://static-00.iconduck.com/assets.00/php-icon-2048x2048-jyo8hbbt.png" alt="PHP Course">
      <div class="course-card-content">
        <h3>PHP & MySQL</h3>
        <p>Build dynamic server‑side applications with PHP and MySQL integration.</p>
        <a href="course.php?lang=php" class="btn">Start Learning</a>
      </div>
    </div>
    <!-- Extra: SQL Course -->
    <div class="course-card">
      <img src="https://thumb.ac-illust.com/b5/b5a9b24b29069e75712619babaf08a3a_t.jpeg" alt="SQL Course">
      <div class="course-card-content">
        <h3>Database with SQL</h3>
        <p>Learn database design, queries, and management using MySQL/PostgreSQL.</p>
        <a href="course.php?lang=sql" class="btn">Start Learning</a>
      </div>
    </div>
  </div>
</div>
</body>

<!--<?php include 'footer.php'; ?>-->
