<?php
// Get the email from the POST data
$email = isset($_POST['email']) ? $_POST['email'] : '';

// Simple email validation (you might want to improve this)
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Save the email to the subscribers.txt file
    $subscribersFile = 'subscribers.txt';
    file_put_contents($subscribersFile, $email . PHP_EOL, FILE_APPEND | LOCK_EX);
    
    echo 'Email subscribed successfully.';
} else {
    echo 'Invalid email address. Please try again.';
}
?>
