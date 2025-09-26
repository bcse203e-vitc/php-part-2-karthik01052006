<?php
$students = ["Rahul" => 85, "Priya" => 92, "Arun" => 78, "Kavya" => 95, "Vishal" => 88];
arsort($students);
echo "<h3>Top 3 Students</h3>";
echo "<table border='1' cellpadding='5'><tr><th>Name</th><th>Marks</th></tr>";
$count = 0;
foreach ($students as $name => $marks) {
    echo "<tr><td>$name</td><td>$marks</td></tr>";
    $count++;
    if ($count == 3) break;
}
echo "</table>";
?>
