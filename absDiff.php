<?php

// Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference.

function absDiff($n)
{

    $x = 51;
    if ($n > $x) {
        return 3 * ($n - $x);
    } else {
        return $x - $n;
    }

}

echo absDiff(53) . "\n";
echo absDiff(30) . "\n";
echo absDiff(51) . "\n";
