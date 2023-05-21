<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contactNumber = $_POST["contactNumber"];
    $message = $_POST["message"];

   // Send an email
    $to = "enquiries@prestigetwd.co.uk";
    $subject = "New form submission";
    $body = "Name: " . $name . "\n"
        . "Email: " . $email . "\n"
        . "Contact Number: " . $contactNumber . "\n"
        . "Message: " . $message;


    // Redirect the user to a thank you page
    header("Location: index.html");
    exit();
}
?>
