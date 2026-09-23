<?php
header('Content-Type: application/json');
include_once('includes/config.php'); 

if(isset($_POST['action']) && $_POST['action'] == 'isPhoneExists'){
    $phone = trim($_POST['phone']);
    $sql = "SELECT COUNT(*) as count FROM registrations WHERE mobile = '$phone'";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $exists = ($row['count'] > 0);
        
        echo json_encode([
            'exists' => $exists,
            'success' => true
        ]);
    } else {
        echo json_encode(['exists' => false, 'error' => 'Query failed']);
    }
}