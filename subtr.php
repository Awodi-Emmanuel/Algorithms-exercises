<?php
//Write a PHP program to check a given integer and
//return true if it is within 10 of 100 or 200.
function test($x){
    if(strlen($x) > 2 && substr($x, 0, 2) == "if"){
        return $x;
    }
   return "if ".$x;


}
var_dump(test("if else"))."\n";
var_dump(test("else"))."\n";


?>