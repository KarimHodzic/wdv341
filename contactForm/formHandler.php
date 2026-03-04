<?php

    require("sendEmail.php");

    // if (sendEmail($to, $subject, $body)) {
    //     echo "Email sent successfully!";
    // } else {
    //     echo "Failed to send email.";

    // }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>

    <div class="container">
        <h1>Contact Us</h1>
        <form action="formHandler.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="subject">Reason for Contact:</label><br>
            <select name="reason" required>
                <option value="">-- Select a Reason --</option>
                <option value="General Question">General Question</option>
                <option value="Support Request">Support Request</option>
                <option value="Pricing Inquiry">Pricing Inquiry</option>
                <option value="Partnership Opportunity">Partnership Opportunity</option>
            </select>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="5" required></textarea><br><br>

            <input type="submit" value="Send Message">

    </div>
    
</body>
</html>