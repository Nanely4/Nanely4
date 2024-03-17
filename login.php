<?php
session_start();
// Change these credentials to match your database
$db_username = 'your_username';
$db_password = 'your_password';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if credentials are correct
    if ($username === $db_username && $password === $db_password) {
        // Authentication successful
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit;
    } else {
        // Authentication failed
        echo 'Invalid username or password. Please try again.';
    }
}
?>
