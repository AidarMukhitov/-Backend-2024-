<?php
function maxSumOfTwo($numbers) {
    $max1 = PHP_INT_MIN;
    $max2 = PHP_INT_MIN;
    foreach ($numbers as $number) {
        if ($number > $max1) {
            $max2 = $max1;
            $max1 = $number;
        } elseif ($number > $max2) {
            $max2 = $number;
        }
    }

    return $max1 + $max2;
}
// Example
// $numbers = [2, 7, 4, 1, 8];
// echo "Наибольшая сумма двух чисел: " . maxSumOfTwo($numbers);
?>
