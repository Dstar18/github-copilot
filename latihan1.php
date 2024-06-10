<?php
function binarySearch(array $arr, int $x): bool
{
    $left = 0;
    $right = count($arr) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);

        // If x is greater, ignore left half
        if ($arr[$mid] < $x) {
            $left = $mid + 1;
        }
        // If x is smaller, ignore right half
        else if ($arr[$mid] > $x) {
            $right = $mid - 1;
        }
        // x is present at mid
        else {
            return true;
        }
    }

    // We reach here when element is not present in array
    return false;
}

// Test array
$arr = array(2, 3, 4, 10, 40);
$x = 3;

$result = binarySearch($arr, $x);

if($result == true) {
    echo "Element is present in array";
} else {
    echo "Element is not present in array";
}
?>