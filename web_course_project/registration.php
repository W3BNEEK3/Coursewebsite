<?php 
include 'db.php'; 
session_start();

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_registration'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Generate OTP
    $otp = rand(100000, 999999);

    // Save details temporarily in session
    $_SESSION['temp_user'] = [
        'fullname' => $fullname,
        'email' => $email,
        'password' => $password,
        'otp' => $otp
    ];

    // Send OTP to email
    $subject = "Your OTP Code";
    $body = "Dear $fullname,\n\nYour OTP code is: $otp\n\nThank you.";
    $headers = "From: yourbank@example.com"; // Replace this with your bank or server email

    if (mail($email, $subject, $body, $headers)) {
        header('Location: verify_otp.php');
        exit();
    } else {
        $message = "Failed to send OTP. Please check your email settings.";
    }
}
?>

<head>
    <link rel="stylesheet" href="styles.css">
</head> 

<?php if ($message) { echo "<p style='color:red;'>$message</p>"; } ?>

<fieldset class="fieldset-login">
    <legend class="leg-login">Register</legend>

    <form method="POST">
        <input name="fullname" placeholder="Full Name" required><br>
        <input name="email" type="email" placeholder="Email" required><br>
        <input name="password" type="password" placeholder="Password" required><br>
        <button type="submit" name="submit_registration">Submit</button>
    </form>

</fieldset>

<h2 class="old-user">Already have an account? <a href="login.php" class="btn outline">Login</a></h2>
