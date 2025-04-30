<head>
    <link rel="stylesheet" href="styles.css">
</head>
<fieldset class="fieldset-login">
    <legend class="leg-login">Contact Us</legend>
<form method="POST">
    <input name="name" placeholder="Your Name" required><br>
    <input name="email" type="email" placeholder="Your Email" required><br>
    <textarea name="message" placeholder="Your Message" required></textarea><br>
    <button type="submit">Send</button>
</form>
</fieldset>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Thanks for contacting us, " . htmlspecialchars($_POST['name']) . "!";
}
?>
