<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    

    <div class="container">
        <h1>Contact Us</h1>
        <?php
        if (isset($_GET['status'])) {
            if ($_GET['status'] == "success") {
                echo "<div class='success'>
                        Your message has been sent successfully!
                    </div>";
            } elseif ($_GET['status'] == "error") {
                echo "<div class='error'>
                        There was a problem sending your message. Please try again.
                    </div>";
            }
        }
        ?>
        <form action="formHandler.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="subject">Reason for Contact:</label><br>
            <select name="subject" required>
                <option value="">-- Select a Reason --</option>
                <option value="General Question">General Question</option>
                <option value="Support Request">Support Request</option>
                <option value="Pricing Inquiry">Pricing Inquiry</option>
                <option value="Partnership Opportunity">Partnership Opportunity</option>
            </select>

            <label for="body">Message:</label><br>
            <textarea id="body" name="body" rows="5" required></textarea><br><br>

            <input type="submit" value="Send Message">
        </form>
    </div>
    
</body>
</html>