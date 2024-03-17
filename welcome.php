<?php
session_start();
// Redirect to login if not authenticated
if (!isset($_SESSION['username'])) {
    header('Location: index.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>This is the protected content.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
