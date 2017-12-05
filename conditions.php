<?php

echo "welcome to greatest numbet logic!"
$a=8;
$b=8;
$c=8;
if($a>$b&&$a>$c){
    echo "A is Greatest number";
}elseif($b>$c){
    if($b==$a){
        echo "A B are equal and Great";
    }else{
        echo "B is Greatest number";
    }
}elseif($a==$b&&$b==$c){
    echo "A B C are equal!";
}elseif($b==$c){
        echo "B C are equal and Great";
}elseif($a==$c){
        echo "A C are equal and Great";
}else{
    echo "C is great!";
}
?>
