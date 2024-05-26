<?php
function binarySearch($sortedArray, $target) {
    $left = 0;
    $right = count($sortedArray) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);

        if ($sortedArray[$mid] === $target) {
            return $mid;
        } elseif ($sortedArray[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return -1;
}
// Example
// $sortedArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// $target = 5;
// $index = binarySearch($sortedArray, $target);

// if ($index !== -1) {
//     echo "Элемент найден на индексе: $index";
// } else {
//     echo "Элемент не найден";
// }
?>