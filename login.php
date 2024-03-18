<?php
// Define hardcoded username and password
$correct_username = "user123";
$correct_password = "password123";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verify username and password
    if ($username === $correct_username && $password === $correct_password) {
        // Authentication successful, redirect to dashboard or homepage
        header('Location: dashboard.php');
        exit;
    } else {
        // Authentication failed
        echo 'Invalid username or password.';
    }
}
?>
