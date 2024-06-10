<?php

function linearCongruentMethod($seed, $a, $c, $m, $n) {
    $result = [];
    $x = $seed;

    for ($i = 0; $i < $n; $i++) {
        $x = ($a * $x + $c) % $m;
        $result[] = $x;
    }

    return $result;
}

// Example usage
$seed = 1; // initial seed
$a = 1664525; // multiplier
$c = 1013904223; // increment
$m = pow(2, 32); // modulus
$n = 10; // number of random numbers to generate

$randomNumbers = linearCongruentMethod($seed, $a, $c, $m, $n);

// Print the generated random numbers
foreach ($randomNumbers as $number) {
    echo $number . " ";
}