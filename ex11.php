<?php

// Function to calculate the sum and average of an array of numbers
function calculateSumAndAverage($numbers) {
    // Ensure the array is not empty
    if (!empty($numbers)) {
        $sum = array_sum($numbers);
        $count = count($numbers);
        $average = $count > 0 ? $sum / $count : 0;

        return [
            'sum' => $sum,
            'average' => $average
        ];
    } else {
        return "The array is empty. Cannot calculate sum and average.";
    }
}

// Sample array of numbers
$numberArray = [10, 15, 20, 25, 30];

// Display the original array
echo "Original Array: ";
print_r($numberArray);

// Call the calculateSumAndAverage function and display the result
$result = calculateSumAndAverage($numberArray);
echo "Sum: " . $result['sum'] . "\n";
echo "Average: " . $result['average'] . "\n";

?>
