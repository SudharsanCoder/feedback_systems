<?php
session_start();
include('db.php'); // Include database connection

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.php"); // Redirect to login page
    exit();
}

// Check if ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete query
    $sql = "DELETE FROM feedbacks WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback deleted successfully.";
    } else {
        echo "Error deleting feedback: " . $conn->error;
    }
}

// Redirect back to admin page
header("Location: admin.php");
exit();
?>
