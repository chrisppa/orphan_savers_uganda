<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Recipient email address
    $to = "cturyasiima@gmail.com";
    
    // Subject
    $subject = "Contact Form Submission from $first_name $last_name";
    
    // Message
    $email_message = "Name: $first_name $last_name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";
    
    // Additional headers
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        // Email not sent
        echo "Sorry, there was an error sending your message.";
    }
} else {
    // Form not submitted
    echo "Form not submitted.";
}
?>
