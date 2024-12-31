<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Form data
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
  
      // Email details
      $to = "romardn6@gmail.com"; // Replace with your actual email address
      $subject = "New Contact Form Submission: $subject";
      $body = "You have received a new message from your website contact form.\n\n".
              "Name: $name\n".
              "Email: $email\n".
              "Subject: $subject\n".
              "Message:\n$message";
      $headers = "From: $email";
  
      // Send email
      if (mail($to, $subject, $body, $headers)) {
          echo "Message sent successfully!";
      } else {
          echo "Error sending message.";
      }
  }
  ?>
  