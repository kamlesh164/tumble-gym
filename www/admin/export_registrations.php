<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/config.php';
checkLogin();

// File name
$filename = "TG-Registrations_".date('Ymd_His').".csv";

$scheme  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host    = $_SERVER['HTTP_HOST']; 
$baseUrl = $scheme.'://'.$host;

// Headers – Excel easily opens CSV
header("Content-Type: text/csv; charset=utf-8");
header("Content-Disposition: attachment; filename=\"$filename\"");

// Open output stream
$output = fopen("php://output", "w");

// Header row (all fields jo chahiye)
fputcsv($output, [
    'Child Name',
    'Child Age',
    'Parent Name',
    'Email',
    'Mobile',
    'Amount',
    'Screenshot URL',
    'Created At'
]);

// Get ALL data (without limit)
$sql = mysqli_query($conn, "SELECT * FROM registrations ORDER BY created_at DESC");

while($row = mysqli_fetch_assoc($sql)){
    $screenshotPath = $row['screenshot'];
    $age = $row['child_age'];
    $excelSafeAge = '="' . $age . '"';

    if($screenshotPath){
        $screenshotFullUrl = rtrim($baseUrl, '/') . '/' . ltrim($screenshotPath, '/');
    } else {
        $screenshotFullUrl = '';
    }
    fputcsv($output, [
        $row['child_name'],
        $excelSafeAge,
        $row['parent_name'],
        $row['email'],
        $row['mobile'],
        $row['amount'],
        $screenshotFullUrl,
        $row['created_at'],
    ]);
}

fclose($output);
exit;
