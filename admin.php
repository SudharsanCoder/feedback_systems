<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.php"); // Redirect to login page
    exit();
}
?>

<?php
include('db.php'); // Include the database connection

// Fetch all feedback from the database
$sql = "SELECT * FROM feedbacks ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Admin Panel - View Feedback</title>
</head>
<body>
<a href="admin_logout.php">Logout</a>


    <h2>All Feedback</h2>

    <table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Submitted At</th>
        <th>Action</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["message"] . "</td>
                    <td>" . $row["created_at"] . "</td>
                    <td>
                        <a href='delete_feedback.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete this feedback?\");'>Delete</a>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No feedback submitted yet.</td></tr>";
    }
    ?>
</table>


</body>
</html>

<?php
$conn->close(); // Close database connection
?>
