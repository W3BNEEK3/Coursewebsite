<!-- filepath: c:\xampp\htdocs\web_course_project\web_course_project\cssCourse.php -->
<?php session_start(); ?>
<?php include 'header.php'; ?>
<body class="dashboard-body">
<div class="container">
  <h1>CSS Styling & Layout</h1>
  <p>Master Flexbox, Grid, responsive design, and modern CSS techniques.</p>
  <h2>Level Cards</h2>
  <div class="level-grid">
    <div class="level-card1">
      <h3>Beginner</h3>
      <p>Learn the basics of CSS, including selectors, properties, and basic layouts.</p>
      <p class="price">$29.99</p>
      <a href="enroll.php?course=css&level=beginner" class="btnLevel1">Learn</a>
    </div>
    <div class="level-card2">
      <h3>Advanced</h3>
      <p>Master Flexbox, Grid, and responsive design techniques.</p>
      <p class="price">$49.99</p>
      <a href="enroll.php?course=css&level=advanced" class="btnLevel2">Learn</a>
    </div>
    <div class="level-card3">
      <h3>Expert</h3>
      <p>Learn advanced animations, transitions, and CSS architecture.</p>
      <p class="price">$79.99</p>
      <a href="enroll.php?course=css&level=expert" class="btnLevel3">Learn</a>
    </div>
  </div>
</div>
</body>
<!--<?php include 'footer.php'; ?>-->