<?php
include 'db.php';
session_start();

$message = '';

if (!isset($_SESSION['temp_user'])) {
    header('Location: registration.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verify'])) {
    $entered_otp = $_POST['otp'];

    if ($entered_otp == $_SESSION['temp_user']['otp']) {
        // OTP verified, insert into database
        $fullname = $_SESSION['temp_user']['fullname'];
        $email = $_SESSION['temp_user']['email'];
        $password = $_SESSION['temp_user']['password'];

        $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $fullname, $email, $password);

        if ($stmt->execute()) {
            unset($_SESSION['temp_user']); // Clear session
            $message = "Registration successful! <a href='login.php'>Login Now</a>";
        } else {
            $message = "Database error: " . $stmt->error;
        }
    } else {
        $message = "Invalid OTP. Please try again.";
    }
}
?>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<fieldset class="fieldset-login">
    <legend class="leg-login">Verify OTP</legend>

    <?php if ($message) { echo "<p style='color:red;'>$message</p>"; } ?>

    <form method="POST">
        <input name="otp" placeholder="Enter OTP" required><br>
        <button type="submit" name="verify">Verify</button>
    </form>

</fieldset>
