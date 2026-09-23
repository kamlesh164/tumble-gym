<?php
// razorpay-verify.php

require('vendor/autoload.php'); // Razorpay SDK via Composer
require_once('includes/config.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

// Your keys
$keyId = '';
$keySecret = '';
$api = new Api($keyId, $keySecret);

// Get POST data from AJAX
$input = json_decode(file_get_contents('php://input'), true);
$order_id   = $input['razorpay_order_id'];
$payment_id = $input['razorpay_payment_id'];
$signature  = $input['razorpay_signature'];
$reg_id     = intval($input['reg_id']);

try {
    // Verify signature (very important!)
    $api->utility->verifyPaymentSignature([
        'razorpay_order_id' => $order_id,
        'razorpay_payment_id' => $payment_id,
        'razorpay_signature' => $signature
    ]);
    $conn->query("UPDATE registrations SET status='paid', razorpay_payment_id='".$conn->real_escape_string($payment_id)."' WHERE id=$reg_id");
    echo json_encode(['success'=>true]);
} catch (SignatureVerificationError $e) {
    echo json_encode(['success'=>false, 'error'=>$e->getMessage()]);
}
