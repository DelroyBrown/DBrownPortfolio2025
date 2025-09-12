<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: same-origin');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method Not Allowed']);
    exit;
}

if (isset($_SERVER['HTTP_ORIGIN'])) {
    $originHost = parse_url($_SERVER['HTTP_ORIGIN'], PHP_URL_HOST);
    if ($originHost && $originHost !== ($_SERVER['HTTP_HOST'] ?? '')) {
    }
}

// -------------------------------
// Input & Validation
// -------------------------------
function s(string $v): string
{
    return trim($v);
}
$name = isset($_POST['name']) ? s((string) $_POST['name']) : '';
$email = isset($_POST['email']) ? s((string) $_POST['email']) : '';
$subject = isset($_POST['subject']) ? s((string) $_POST['subject']) : 'New portfolio message';
$message = isset($_POST['message']) ? s((string) $_POST['message']) : '';

// Honeypot (bots will fill it; humans won’t see it)
$honeypot = isset($_POST['website']) ? (string) $_POST['website'] : '';

$errors = [];
if ($honeypot !== '')
    $errors[] = 'Bot detected.';
if ($name === '' || mb_strlen($name) > 100)
    $errors[] = 'Name is required and must be <= 100 chars.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    $errors[] = 'Valid email required.';
if ($message === '' || mb_strlen($message) > 5000)
    $errors[] = 'Message is required (<= 5000 chars).';

if ($errors) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => implode(' ', $errors)]);
    exit;
}

// -------------------------------
// PHPMailer bootstrap
// -------------------------------
$autoloadPath = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath)) {
    require $autoloadPath;
}

// Load .env (safe even if .env is missing)
if (class_exists(\Dotenv\Dotenv::class)) {
    $dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->safeLoad();
}

if (file_exists($autoloadPath)) {
    require $autoloadPath;
} else {
    $altBase = __DIR__ . '/../PHPMailer/src';
    if (file_exists("$altBase/PHPMailer.php")) {
        require "$altBase/Exception.php";
        require "$altBase/PHPMailer.php";
        require "$altBase/SMTP.php";
    } else {
        http_response_code(500);
        echo json_encode(['ok' => false, 'error' => 'PHPMailer not found. Install via Composer or place PHPMailer/src next to your project.']);
        exit;
    }
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// -------------------------------
// SMTP configuration
// -------------------------------
function envOr(string $key, ?string $default = null): ?string
{
    if (isset($_ENV[$key]) && $_ENV[$key] !== '')
        return $_ENV[$key];
    $v = getenv($key);
    return ($v !== false && $v !== '') ? $v : $default;
}


$smtpHost = envOr('SMTP_HOST', 'smtp.gmail.com');
$smtpUser = envOr('SMTP_USER');     // REQUIRED
$smtpPass = envOr('SMTP_PASS');     // REQUIRED
$smtpPort = (int) (envOr('SMTP_PORT', '587') ?? '587');

$fromEmail = envOr('FROM_EMAIL', $smtpUser);
$fromName = envOr('FROM_NAME', 'Portfolio Contact');
$toEmail = envOr('TO_EMAIL', $smtpUser);

if (!$smtpUser || !$smtpPass) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'SMTP credentials not loaded. Check .env or hosting env vars.']);
    exit;
}
if (!$fromEmail || !filter_var($fromEmail, FILTER_VALIDATE_EMAIL)) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'FROM_EMAIL is missing/invalid.']);
    exit;
}
if (!$toEmail || !filter_var($toEmail, FILTER_VALIDATE_EMAIL)) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'TO_EMAIL is missing/invalid.']);
    exit;
}



$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUser;
    $mail->Password = $smtpPass;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // or ENCRYPTION_SMTPS
    $mail->Port = $smtpPort;

    // Recipients
    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($toEmail);
    $mail->addReplyTo($email, $name); // so you can hit reply

    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;

    $safeName = htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeEmail = htmlspecialchars($email, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeSubject = htmlspecialchars($subject, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeMsg = nl2br(htmlspecialchars($message, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'));

    $mail->Body = "
        <h2>New message from your portfolio</h2>
        <p><strong>Name:</strong> {$safeName}</p>
        <p><strong>Email:</strong> {$safeEmail}</p>
        <p><strong>Subject:</strong> {$safeSubject}</p>
        <p><strong>Message:</strong><br>{$safeMsg}</p>
        <hr>
        <small>Sent: " . date('Y-m-d H:i:s') . " | IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "</small>
    ";
    $mail->AltBody = "New message from your portfolio\n\nName: {$name}\nEmail: {$email}\nSubject: {$subject}\n\n{$message}\n";

    $mail->send();
    echo json_encode(['ok' => true, 'message' => 'Message sent. Thank you!']);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Mailer error: ' . $mail->ErrorInfo]);
}
