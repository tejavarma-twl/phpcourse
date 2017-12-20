<?php
function operation($num1,$num2,$variable)
{
    switch($variable){
        case "+":$result = $num1+$num2;
                echo $result;
                break;
        case "-":
                if ($num1>$num2)
                {
                    echo "first num should be bigger than second";
                }
                else{
                    $result = $num1-$num2;

                    echo $result;
                }
                break;
        case "*": $result = $num1*$num2;
                echo $result;
                break;
        case "/": 
                if ($num1<$num2)
                {
                    echo "divider must be smaller then divident";
                }
                else{
                    $result = $num1/$num2;
                echo $result;

                }
                break;
                
        default: echo "no operation given";
    }
}
operation(1,2," ");

?>