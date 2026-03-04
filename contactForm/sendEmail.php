<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Demo</title>
</head>
<body>
  <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';


    function sendEmail($name, $email, $subject, $body) {
      $mail = new PHPMailer(true);

      try {
          // Server settings
          // Enable verbose debug output for troubleshooting.
          // Set to 0 in production to disable.
          $mail->SMTPDebug = 2;
          $mail->isSMTP(); // Use SMTP to send.
          $mail->Host = 'smtp.gmail.com'; // Specify Gmail's SMTP server.
          $mail->SMTPAuth = true; // Enable SMTP authentication
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption.
          $mail->Port = 587; // TCP port for TLS.

          // Recipients
          $mail->setFrom('karimhodzic@gmail.com', 'Karim Hodzic'); // Sender's email and name.
          $mail->addAddress($email, $name); // Recipient's email and name.
          // Optional: Add a CC or BCC recipient
          // $mail->addCC('cc_recipient@example.com');
          // $mail->addBCC('bcc_recipient@example.com');

          // Content
          $mail->isHTML(true); // Set email format to HTML.
          $mail->Subject = $subject; // Email subject.
          $mail->Body = $body; // HTML body.
          $mail->AltBody = 'This is the plain text version of the email.'; // Plain text for non-HTML clients.
          // Optional: Add an attachment
          // $mail->addAttachment('/path/to/your/file.pdf', 'filename.pdf');.

          $mail->send();
          echo 'Message has been sent successfully';
      } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
    }

  ?>
</body>
</html>
