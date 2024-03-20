<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up email
    $to = "resurgent.arun@gmail.com";
    $subject = "New Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you for your submission!";
    } else {
        echo "Error sending email.";
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: contact.html");
    exit;
}
?>
