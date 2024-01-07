<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted email
    $email = $_POST["email"];

    // Validate the email format
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Valid email, redirect to success page
        header("Location: success.php");
        exit();
    } else {
        // Invalid email, redirect back to the form with an error message
        header("Location: index.php?error=invalid_email");
        exit();
    }
} else {
    // If the form is not submitted, redirect to the index page
    header("Location: index.php");
    exit();
}
?>