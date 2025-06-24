<?php
// Directly include PHPMailer classes from local phpmailer/src directory
require_once __DIR__ . '/../phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/../phpmailer/src/Exception.php';
require_once __DIR__ . '/../phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = 'c00134456318fb';
    $mail->Password = 'd53b136394c7e7'; // ✅ replace with your real password/token
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 2525;

    $mail->setFrom($email, $name);
    $mail->addAddress('kaungkhantzayyar13@gmail.com', 'Kaung Khant Zayar');

    $mail->isHTML(true);
    $mail->Subject = "New message from $name";
    $mail->Body    = "<h3>New Contact Message</h3>
                      <p><strong>Name:</strong> $name</p>
                      <p><strong>Email:</strong> $email</p>
                      <p><strong>Subject:</strong> $subject</p>
                      <p><strong>Message:</strong><br>$message</p>";
    $mail->AltBody = "New contact message from $name\nEmail: $email\n\nMessage:\n$message";

    $mail->send();

    echo "<script>alert('✅Your message has been sent');window.location.href='../protfolio.php'</script>";
    } catch (Exception $e) {
    echo "<script>alert('❌ Message could not be sent. Error: {$mail->ErrorInfo}');window.location.href='../protfolio.php'</script>";
    }
