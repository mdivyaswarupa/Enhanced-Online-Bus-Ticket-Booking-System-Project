<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $passenger_mobile = $_SESSION['mobile']; // Retrieve mobile number from session
    $passenger_email = $_SESSION['email'];   // Retrieve email address from session
    $payment_option = isset($_POST['payment_option']) ? $_POST['payment_option'] : '';

    // Process the form data (for example, you can send an email)
    sendEmail($passenger_email, $payment_option);

    // Rest of your processing logic goes here...
}

// Function to send email
function sendEmail($to, $payment_option) {
    $from = "schiranjeevi@gmail.com"; // Sender's email address
    $subject = "Ticket Booking Confirmation";
    $message = "Dear Passenger,\n\nYour ticket has been booked successfully using $payment_option. Thank you for choosing our service.";

    // Additional headers
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send email
    mail($to, $subject, $message, $headers);
}
?>


</body>
</html>
