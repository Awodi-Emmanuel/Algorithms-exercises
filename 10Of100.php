<?php
//    Write a PHP program to check a given integer and return true
//    if it is within 10 of 100 or 200.
function checkNum($a){

    if (abs($a - 100) <= 10 || abs($a - 200) <= 10){
        return true;

    }
        return false;

}
var_dump(checkNum(103))."\n";
var_dump(checkNum(90))."\n";
var_dump(checkNum(89))."\n";



?>