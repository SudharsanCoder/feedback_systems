<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Feedback Form</title>
</head>
<body>

    <h2>Feedback Form</h2>
    <form action="submit_feedback.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <label for="message">Feedback Message:</label><br>
        <textarea name="message" id="message" rows="4" cols="50" required></textarea><br><br>
        
        <button type="submit">Submit Feedback</button>
    </form>

</body>
</html>
