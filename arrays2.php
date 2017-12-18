<?php

// 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55

$fib = [0,1];
for($i=0;$i<90;$i++){
   $fib[$i+2] = $fib[$i]+$fib[$i+1];
}
print "<pre>";
// print_r($fib);



$myarr = [];

array_push($myarr,[1,2]);
array_push($myarr,[1,2,3,4,5]);

print "<pre>";
print_r($myarr);

 // $k = $i+$j;
    //echo $k;
    // array_push($array,$k);
    // echo "<br>";
    // $i=$j;
    // $j=$k;
?>