<?php
$logFile = "access.log";
$username = "admin";
$action = "Logged In";
$logEntry = "$username – " . date("Y-m-d H:i:s") . " – $action\n";
file_put_contents($logFile, $logEntry, FILE_APPEND);
$logs = file($logFile, FILE_IGNORE_NEW_LINES);
$lastLogs = array_slice($logs, -5);
echo "<h3>Last 5 Log Entries</h3>";
foreach ($lastLogs as $entry) {
    echo $entry . "<br>";
}
?>
