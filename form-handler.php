<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_post['message'];

  $email_from = 'info@digitalpro.com';

  $email_subject = 'New Form Submission';

  $email_body = "Username: $name.\n".
                "User Email: $visitor_email.\n".
                "User Subject: $subject.\n".
                "User Message: $message.\n";

  $to = 'rahul9449766@gmail.com';

  $headers = "From: $email_from \r\n";

  $headers .= "Reply To: $visitor_email \r\n";

  mail($to, $email_subject, $headers);

  header("Location: contact.html");
?>
