<?php
class EmptyArrayException extends Exception {}
function calculateAverage($numbers) {
    if (empty($numbers)) throw new EmptyArrayException("No numbers provided");
    return array_sum($numbers) / count($numbers);
}
try {
    $nums = [10, 20, 30, 40, 50];
    echo "Average = " . calculateAverage($nums);
} catch (EmptyArrayException $e) {
    echo "Error: " . $e->getMessage();
}
?>
