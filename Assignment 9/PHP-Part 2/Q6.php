<?php
echo "Current Date & Time: " . date("d-m-Y H:i:s") . "<br><br>";
$dob = "1990-05-15";
$today = new DateTime();
$nextBirthday = new DateTime(date("Y") . "-" . date("m-d", strtotime($dob)));
if ($nextBirthday < $today) $nextBirthday->modify("+1 year");
$daysLeft = $today->diff($nextBirthday)->days;
echo "Days left until next birthday: $daysLeft";
?>
