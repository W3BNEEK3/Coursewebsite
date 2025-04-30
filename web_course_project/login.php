<?php 
include 'db.php'; 
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $user = $stmt->get_result()->fetch_assoc();

            if ($user && password_verify($password, $user['password'])) {
                session_regenerate_id(true);
                $_SESSION['user'] = $user;
                header("Location: dashboard.php");
                exit;
            } else {
                echo "Invalid login.";
            }
        } else {
            echo "Database error.";
        }
    }
}
?>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<form method="POST">
    <fieldset class="fieldset-login">
        <legend class="leg-login">Login</legend>
        <input name="email" type="email" placeholder="Email" required><br>
        <input name="password" type="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </fieldset>
</form>
