<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contactNumber = $_POST["contactNumber"];
    $message = $_POST["message"];

    // TODO: Perform any necessary validation on the form data

    // TODO: Process the form data (e.g., send an email, store in a database, etc.)

    // Redirect the user to a thank you page
    header("Location: thank-you.html");
    exit();
}
?>
