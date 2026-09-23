<?php
// 1. REQUIRE THE RAZORPAY PHP SDK
require('vendor/autoload.php'); // use composer
require_once('includes/config.php');
use Razorpay\Api\Api;

$keyId = '';
$keySecret = '';
$api = new Api($keyId, $keySecret);

// 2. Get form data (POST JSON from JS)
$data = json_decode(file_get_contents('php://input'), true);

$amount = intval($data['registration_fee']) * 100; // Make sure it's in paise!
$amount = 100; //TESTING ONLY

// Save registration as pending (you may want to sanitize/validate!)
$stmt = $conn->prepare("INSERT INTO registrations 
  (child_name, child_age, parent_name, email, mobile, school, amount, status, created_at) 
  VALUES (?, ?, ?, ?, ?, ?, ?, 'pending', NOW())");

$stmt->bind_param('ssssssi',
  $data['child_name'],
  $data['child_age'],
  $data['parent_name'],
  $data['email'],
  $data['mobile'],
  $data['school'],
  $amount
);

$stmt->execute();
$reg_id = $stmt->insert_id;

// 4. Create Razorpay order (amount, currency, and your receipt id)
$orderData = [
    'receipt'         => 'reg_'.$reg_id,
    'amount'          => $amount,
    'currency'        => 'INR',
    'payment_capture' => 1
];
$razorpayOrder = $api->order->create($orderData);

// 5. Return JSON to frontend
echo json_encode(['order_id' => $razorpayOrder['id'], 'reg_id' => $reg_id]);
