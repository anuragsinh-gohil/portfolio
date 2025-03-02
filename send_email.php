<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST["fullname"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "anuragsinh.gohil98@gmail.com"; 
    $subject = "New Contact Form Submission from $fullname";
    $body = "You have received a new message:\n\n";
    $body .= "Full Name: $fullname\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    $headers = "From: no-reply@yourwebsite.com" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Failed to send your message. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
