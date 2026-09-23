<?php
header('Content-Type: application/json');
include_once('includes/config.php'); // assumes $conn or adjust per your config

$data = json_decode(file_get_contents('php://input'), true);

$stmt = $conn->prepare("INSERT INTO lead_users
  (name, email, phone, age, volunteer_role, availability, pre_exp)
  VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('sssssss',
  $data['name'],
  $data['email'],
  $data['phone'],
  $data['age'],
  $data['volunteer_role'],
  $data['availability'],
  $data['pre_exp']
);

$ok = $stmt->execute();
echo json_encode(['success' => $ok]);
