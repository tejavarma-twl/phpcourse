<?php
function addition(){
    echo "this is addition \n";
    echo "<br>";
}

function areaofsquare($s){
    $a = $s*$s;
    echo "Area of square is : ".$a;
    echo "<br>";
}


function factorial($v){
    $fact = [];
    for($i=1;$i<=$v;$i++){
        if($v%$i==0){
            array_push($fact,$i);
        }
    }
    print "<pre>";
    print_r($fact);
}

function findfactorial($num){
    $fact = [];
    for($i=1;$i<=$num;$i++){
        if($num%$i==0){
            array_push($fact,$i);
        }
    }
    return $fact;
}

function findcommonfact($num1,$num2){
    $fact1 = findfactorial($num1);
    $fact2 = findfactorial($num2);
    print "<pre>";
    print_r($fact1);
    print_r($fact2);
    $comp = array_intersect($fact1,$fact2);
    print_r($comp);
}
?>