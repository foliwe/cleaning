<?php

define('RECIPIENT_EMAIL', 'foliwe@gmail.com');

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Initialize variables and set to empty strings
$name = $email = $message = "";

// Error messages initialized as empty
$nameErr = $emailErr = $messageErr = "";

// Flag to check if data is valid
$isValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if name has been entered
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $isValid = false;
    } else {
        $name = sanitize_input($_POST["name"]);
    }

    // Check if email has been entered and is valid
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $isValid = false;
    } else {
        $email = sanitize_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $isValid = false;
        }
    }

    // Check if message has been entered
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
        $isValid = false;
    } else {
        $message = sanitize_input($_POST["message"]);
    }

    // If data is valid, send the email
    if ($isValid) {
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Send the email
        if (mail(RECIPIENT_EMAIL, "New message from $name", $message, $headers)) {
            echo '<p class="text-xl pl-3 bg-emerald-600 text-white py-2">Message sent successfully.</p>';
        } else {
            echo '<p class="text-xl pl-3 bg-rose-600 text-white py-2">Message could not be sent.</p>';
        }
    }
}
?>

