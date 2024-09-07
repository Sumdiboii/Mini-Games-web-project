<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $feedback = htmlspecialchars(trim($_POST['feedback']));
    
    // Email details
    $to = "spimplikar08@gmail.com"; // Your email address
    $subject = "New Feedback from $name";
    $message = "Name: $name\nEmail: $email\n\nFeedback:\n$feedback";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Failed to send feedback. Please try again.";
    }
}
?>
