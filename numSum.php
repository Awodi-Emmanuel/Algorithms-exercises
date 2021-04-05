<?php

// Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.

function numSum($a, $b)
{

    $sum = $a + $b;
    if ($a === $b) {
        return $sum * 3;
    } else {
        return $sum;
    }

}

echo numSum(1, 2) . "\n";
echo numSum(3, 2) . "\n";
echo numSum(2, 2) . "\n";
