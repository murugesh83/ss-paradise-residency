<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $check_in = htmlspecialchars($_POST['check-in']);
    $check_out = htmlspecialchars($_POST['check-out']);
    $room_type = htmlspecialchars($_POST['room-type']);
    $guests = htmlspecialchars($_POST['guests']);
    $special_requests = htmlspecialchars($_POST['special-requests']);

    $to = "s.murugesh83@gmail.com"; // Your email address
    $subject = "New Booking from " . $name;
    $message = "
    Name: $name\n
    Email: $email\n
    Phone: $phone\n
    Check-in Date: $check_in\n
    Check-out Date: $check_out\n
    Room Type: $room_type\n
    Number of Guests: $guests\n
    Special Requests: $special_requests\n
    ";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n"; // Ensures replies go back to the sender

    if (mail($to, $subject, $message, $headers)) {
        // Redirect to a thank you page or back to the form with a success message
        header('Location: thank_you.html'); // Create a thank_you.html page
        exit();
    } else {
        // Redirect to an error page or back to the form with an error message
        header('Location: error.html'); // Create an error.html page
        exit();
    }
}
?>