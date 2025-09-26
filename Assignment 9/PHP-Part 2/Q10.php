<?php
$students = file("students.txt", FILE_IGNORE_NEW_LINES);
$errorLog = "errors.log";
$validRecords = [];
foreach ($students as $line) {
    $parts = explode(",", $line);
    if (count($parts) != 3) {
        file_put_contents($errorLog, "Invalid record: $line\n", FILE_APPEND);
        continue;
    }
    list($name, $email, $dob) = $parts;
    if (!preg_match("/^[\w.-]+@[\w.-]+\.[a-z]{2,}$/i", $email)) {
        file_put_contents($errorLog, "Invalid email: $line\n", FILE_APPEND);
        continue;
    }
    $birthDate = new DateTime($dob);
    $age = $birthDate->diff(new DateTime())->y;
    $validRecords[] = [$name, $email, $age];
}
echo "<h3>Valid Student Records</h3>";
echo "<table border='1' cellpadding='5'><tr><th>Name</th><th>Email</th><th>Age</th></tr>";
foreach ($validRecords as $record) {
    echo "<tr><td>{$record[0]}</td><td>{$record[1]}</td><td>{$record[2]}</td></tr>";
}
echo "</table>";
?>
