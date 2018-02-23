<?php
for($i=1;$i<200;$i++){
    $k=0;
    for($j=1;$j<=$i;$j++){
        if($i%$j==0){
            $k++;
        }
    }    
    if($k==2){
        echo "$i  " ;
        echo "<br>";
    }
}
 echo"are the prime numbers from 1 to 200";
?>