<?php
$originalFile = "data.txt";
$timestamp = date("Y-m-d_H-i");
$backupFile = pathinfo($originalFile, PATHINFO_FILENAME) . "_$timestamp.txt";
if (copy($originalFile, $backupFile)) {
    echo "Backup created: $backupFile";
} else {
    echo "Backup failed!";
}
?>
