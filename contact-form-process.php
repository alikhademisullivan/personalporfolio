<?php
if(isset($_POST['send'])) {
  // Retrieve form data
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $message = $_POST['Message'];

  // Email information
  $to = "sullivanali03@gmail.com";  // Change this to your desired email address
  $subject = "New Contact Form Submission";
  $headers = "From: $email";

  // Compose the email body
  $email_body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

  // Send the email
  if(mail($to, $subject, $email_body, $headers)) {
    // Email sent successfully
    echo "Thank you for your message. We'll get back to you shortly.";
  } else {
    // Error sending email
    echo "Sorry, something went wrong. Please try again later.";
  }
}
?>