<?php
if (isset($_POST['email']) && !empty($_POST['email'])) {
  $to = 'danstratford84@gmail.com'; 
  $subject = "New contact request: " . $_POST['subject'];
  $message = $_POST['body'];
  $headers = 'From: ' . $_POST['email'] . "\r\n" .
             'Reply-To: ' . $_POST['email'] . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo 'Thank you for your email. We will get back to you soon.';
  } else {
    echo 'Sorry, there was an error sending your message. Please try again later.';
  }
}
?>

