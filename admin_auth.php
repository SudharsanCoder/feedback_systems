<?php
session_start();

$admin_username = "admin";  // Set your admin username
$admin_password = "admin123";  // Set your admin password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin.php"); // Redirect to admin panel
        exit();
    } else {
        echo "Invalid login credentials.";
    }
}
?>
