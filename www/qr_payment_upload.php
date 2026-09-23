<?php
header('Content-Type: application/json');
include_once('includes/config.php'); // database connection: $conn

// Handle image upload
$img = $_FILES['payment_screenshot'] ?? null;
$file_url = '';
if($img && !$img['error']) {
  $target_dir = 'images/payments/';
  if(!is_dir($target_dir)) mkdir($target_dir,0777,true);
  $target_file = $target_dir . time() . '_' . basename($img['name']);
  move_uploaded_file($img['tmp_name'], $target_file);
  $file_url = $target_file;
}

// Collect all form fields
$child_name = $_POST['child_name'] ?? '';
$child_age = $_POST['child_age'] ?? '';
$parent_name = $_POST['parent_name'] ?? '';
$email = $_POST['email'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$school = $_POST['school'] ?? '';
$registration_fee = $_POST['registration_fee'] ?? '';
$agreed = $_POST['agree'] ?? '';

// Save to your registrations table (add more fields as needed)
$stmt = $conn->prepare("INSERT INTO registrations 
  (child_name, child_age, parent_name, email, mobile, school, amount, agreed, screenshot, status, created_at) 
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 'paid', NOW())");
$stmt->bind_param(
  'ssssssiss',
  $child_name,
  $child_age,
  $parent_name,
  $email,
  $mobile,
  $school,
  $registration_fee,
  $agreed,
  $file_url
);

$ok = $stmt->execute();
echo json_encode(['success' => $ok]);
