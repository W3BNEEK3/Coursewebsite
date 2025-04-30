<?php include 'db.php'; session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
    echo "Access denied.";
    exit;
}
$result = $conn->query("SELECT * FROM users");
echo "<h1>Registered Users</h1><table border='1'><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['fullname']}</td><td>{$row['email']}</td></tr>";
}
echo "</table><a href='logout.php'>Logout</a>";
?>
