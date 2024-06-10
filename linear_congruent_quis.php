<?php

function linearCongruentMethod($seed, $a, $c, $m, $n) {
    $numbers = [];
    $x = $seed;

    for ($i = 0; $i < $n; $i++) {
        $x = ($a * $x + $c) % $m;
        $numbers[] = $x;
    }

    return $numbers;
}

// Example usage
$seed = 7; // Initial seed
$a = 11; // Multiplier
$c = 3; // Increment
$m = 25; // Modulus
$n = 10; // Number of random numbers to generate

$randomNumbers = linearCongruentMethod($seed, $a, $c, $m, $n);

// Print the generated random numbers
foreach ($randomNumbers as $number) {
    echo $number . " ";
}

// output: 5 8 16 4 22 20 23 6 19 12