<?php
//Write a PHP program to check two given integers,
//and return true if one of them is 30 or if their sum is 30.
function checkInt($x, $y){

    if($x == 30 || $y == 30 || $x + $y  == 30){
        return true;
    }else{

        return false;

    }


}
 var_dump(checkInt(30, 0))."\n";
 var_dump(checkInt(25, 5))."\n";
 var_dump(checkInt(20, 30))."\n";
 var_dump(checkInt(20,25))."\n";







?>