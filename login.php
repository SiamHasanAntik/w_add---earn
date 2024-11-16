<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verify credentials here
    // If successful:
    header("Location: dashboard.html");
    exit();
}
?>
