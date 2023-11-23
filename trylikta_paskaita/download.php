<?php
$row_id=trim($_POST['downloadBtn']);
$filedatasarray=json_decode(file_get_contents('file_database.json'),true);
$filetodownload=$filedatasarray[$row_id]['filesavepath'];
// Check if the file exists
if (file_exists($filetodownload)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($filetodownload) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filetodownload));
    readfile($filetodownload);
    // Exit to prevent further output
    exit;
} else {
    // File not found
    echo "File not found.";
}


