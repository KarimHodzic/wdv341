<?php
require("sendEmail.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $subject = htmlspecialchars($_POST['subject']);
    $body = htmlspecialchars(trim($_POST['body']));
    $date = date("m/d/Y");

    if (!$name || !$email || !$subject || !$body) {
        die("Invalid form submission.");
    }

    $customerMessage = "
    <div style='font-family:Arial; padding:20px;'>
        <h2 style='color:#1f3c88;'>Thank You for Contacting Us</h2>
        <p>Hello $name,</p>
        <p>We received your message on <strong>$date</strong>.</p>
        <p><strong>Reason:</strong> $subject</p>
        <p><strong>Your Message:</strong><br>$body</p>
        <p>We will respond as soon as possible.</p>
        <hr>
        <p style='font-size:12px;color:gray;'>Karim Hodzic Business</p>
    </div>
    ";

    sendEmail($name, $email, "We Received Your Message", $customerMessage);



    $adminMessage = "
    <h2>New Contact Form Submission</h2>
    <ul>
        <li><strong>Date:</strong> $date</li>
        <li><strong>Name:</strong> $name</li>
        <li><strong>Email:</strong> $email</li>
        <li><strong>Reason:</strong> $subject</li>
        <li><strong>Message:</strong> $body</li>
    </ul>
    ";

    sendEmail("Karim Hodzic", "karimhodzic@gmail.com", "New Contact Submission", $adminMessage);

    header("Location: email.php?status=success");
    exit();
}

?>