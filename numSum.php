<?php

function numSum($a, $b)
{

    $sum = $a + $b;
    if ($a === $b) {
        return $sum * 3;
    } else {
        return $sum;
    }

}

echo numSum(1, 2)."\n";
echo numSum(3, 2)."\n";
echo numSum(2,2)."\n";
