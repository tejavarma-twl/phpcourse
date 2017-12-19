<?php
// 1234
// 123
// 12
// 1
// $main = array();
$main = [];
for($i=5;$i>1;$i--){
    $sub = [];
    for($j=1;$j<$i;$j++){
        array_push($sub,$j);
    }
    array_push($main,$sub);
    echo "<br>";
}

print "<pre>";
print_r($main);
?>