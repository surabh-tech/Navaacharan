<?php
error_reporting(0);
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST['email'])) {
    echo json_encode(['alert' => 'alert-danger', 'message' => 'Please provide your email address.']);
    exit;
}

$name    = trim(strip_tags($_POST['name']    ?? ''));
$email   = trim(strip_tags($_POST['email']   ?? ''));
$phone   = trim(strip_tags($_POST['phone']   ?? ''));
$subj    = trim(strip_tags($_POST['subject'] ?? ''));
$comment = trim(strip_tags($_POST['comment'] ?? ''));

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['alert' => 'alert-danger', 'message' => 'Please enter a valid email address.']);
    exit;
}

$to      = 'amey.kulkarni@navaacharan.com';
$subject = $subj ? $subj : 'New enquiry from Navaacharan website';

$body = "
<html><body style='font-family:Arial,sans-serif;font-size:14px;color:#333;'>
<h2 style='color:#19e089;'>New Enquiry — Navaacharan Website</h2>
<table cellpadding='8' cellspacing='0' width='100%' style='border-collapse:collapse;'>
  <tr style='background:#f9f9f9;'><td width='100'><strong>Name</strong></td><td>{$name}</td></tr>
  <tr><td><strong>Email</strong></td><td><a href='mailto:{$email}'>{$email}</a></td></tr>
  <tr style='background:#f9f9f9;'><td><strong>Phone</strong></td><td>" . ($phone ?: '—') . "</td></tr>
  <tr><td><strong>Subject</strong></td><td>" . ($subj ?: '—') . "</td></tr>
  <tr style='background:#f9f9f9;'><td><strong>Message</strong></td><td>" . nl2br($comment) . "</td></tr>
</table>
</body></html>";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Navaacharan Website <no-reply@navaacharan.com>\r\n";
$headers .= "Reply-To: {$name} <{$email}>\r\n";

if (mail($to, $subject, $body, $headers)) {
    echo json_encode(['alert' => 'alert alert-success', 'message' => 'Your message has been sent successfully!']);
} else {
    echo json_encode(['alert' => 'alert alert-danger', 'message' => 'Could not send message. Please email us at amey.kulkarni@navaacharan.com directly.']);
}
