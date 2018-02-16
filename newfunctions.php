<?php
echo $string = "ab/c/ff/gg/ed/gh";
$arr  = explode("/",$string);
print "<pre>";
print_r($arr);
$string2 = implode(" ",$arr);
echo $string2;
$arr2  = explode(" ",$string2);
print_r($arr2);


function extractData($flag,$arr){
    return explode($flag,$arr);
}



$arr1 = extractData("/",$string);
$arr2 = extractData(" ",$string2);
print_r($arr1);
print_r($arr2);
?>