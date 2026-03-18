<?php
/*  ── Book Spire Publishing – Contact Form Handler ── */
ob_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST['name'])) {
    ob_end_clean();
    header('Location: index.php');
    exit;
}

$name    = trim(strip_tags($_POST['name']    ?? ''));
$email   = trim(strip_tags($_POST['email']   ?? ''));
$phone   = trim(strip_tags($_POST['phone']   ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));
$content = trim(strip_tags($_POST['content'] ?? 'website'));

$subject = 'New Contact Form Submission - Book Spire Publishing';

$body = '<!DOCTYPE html>
<html>
<body style="margin:0;padding:0;background:#f4f4f4;font-family:Arial,sans-serif;">
<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f4;padding:30px 20px;">
  <tr><td align="center">
    <table width="580" cellpadding="0" cellspacing="0" style="max-width:580px;width:100%;background:#fff;border-radius:8px;overflow:hidden;">

      <tr>
        <td style="background:#00838c;padding:24px 32px;">
          <h2 style="color:#fff;margin:0;font-size:20px;">New Form Submission</h2>
          <p style="color:#a0dde3;margin:6px 0 0;font-size:13px;">Book Spire Publishing &mdash; ' . date('F j, Y \a\t g:i A') . '</p>
        </td>
      </tr>

      <tr>
        <td style="padding:28px 32px;">
          <table width="100%" border="1" cellpadding="10" cellspacing="0" style="border-collapse:collapse;border-color:#e0e0e0;">
            <tr>
              <td style="background:#f9f9f9;width:110px;font-weight:bold;color:#555;font-size:13px;">Name</td>
              <td style="font-size:14px;">' . htmlspecialchars($name) . '</td>
            </tr>
            <tr>
              <td style="background:#f9f9f9;font-weight:bold;color:#555;font-size:13px;">Email</td>
              <td style="font-size:14px;"><a href="mailto:' . htmlspecialchars($email) . '" style="color:#00838c;">' . htmlspecialchars($email) . '</a></td>
            </tr>
            <tr>
              <td style="background:#f9f9f9;font-weight:bold;color:#555;font-size:13px;">Phone</td>
              <td style="font-size:14px;">' . htmlspecialchars($phone) . '</td>
            </tr>
            <tr>
              <td style="background:#f9f9f9;font-weight:bold;color:#555;font-size:13px;">Message</td>
              <td style="font-size:14px;">' . nl2br(htmlspecialchars($message)) . '</td>
            </tr>
            <tr>
              <td style="background:#f9f9f9;font-weight:bold;color:#555;font-size:13px;">Source</td>
              <td style="font-size:14px;">' . htmlspecialchars($content) . '</td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td style="background:#1a2e2f;padding:14px 32px;text-align:center;">
          <p style="color:#7aacaf;margin:0;font-size:12px;">&copy; ' . date('Y') . ' Book Spire Publishing. All rights reserved.</p>
        </td>
      </tr>

    </table>
  </td></tr>
</table>
</body>
</html>';

$sent        = false;
$errorDetail = '';

/* ── PHPMailer via Hostinger SMTP ──────────────────────────────────────── */
$phpmailerPath = __DIR__ . '/PHPMailer/src/PHPMailer.php';

if (file_exists($phpmailerPath)) {
    require_once __DIR__ . '/PHPMailer/src/Exception.php';
    require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
    require_once __DIR__ . '/PHPMailer/src/SMTP.php';

    try {
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        $mail->SMTPDebug  = 0;
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@bookspirepublishing.com';
        $mail->Password   = 'Hysshaikhani@321';
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom('info@bookspirepublishing.com', 'Book Spire Publishing');
        $mail->addAddress('info@bookspirepublishing.com',          'Info');
        $mail->addAddress('derricklouis@bookspirepublishing.com',  'Derrick Louis');
        $mail->addAddress('harrisbenjamin@bookspirepublishing.com','Harris Benjamin');
        $mail->addAddress('johnwilliams@bookspirepublishing.com',  'John Williams');

        if (!empty($email)) {
            $mail->addReplyTo($email, $name);
        }

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nMessage: {$message}\nSource: {$content}";

        $mail->send();
        $sent = true;

    } catch (Exception $e) {
        $errorDetail = $mail->ErrorInfo;
    }
}

/* ── Fallback: native mail() ───────────────────────────────────────────── */
if (!$sent) {
    $to      = 'info@bookspirepublishing.com, derricklouis@bookspirepublishing.com, harrisbenjamin@bookspirepublishing.com, johnwilliams@bookspirepublishing.com';
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $headers .= 'From: Book Spire Publishing <info@bookspirepublishing.com>' . "\r\n";
    if (!empty($email)) {
        $headers .= 'Reply-To: ' . $email . "\r\n";
    }
    $sent = @mail($to, $subject, $body, $headers);
}

/* ── Response ─────────────────────────────────────────────────────────── */
ob_clean();
echo json_encode([
    'success' => $sent ? 1 : 0,
    'error'   => $sent ? '' : 'Could not send. Please call +1 (213) 784-1841.',
    'debug'   => $errorDetail,
]);
