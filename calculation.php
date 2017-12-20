<?php


function calculate($num1,$num2,$operation)
{
    if ($operation=="+")
    {
    $result= $num1+$num2;
    echo $result;
    }
    if ($operation=="-")
        {
            if($num1>=$num2)
                {
                    $result= $num1-$num2;
                echo $result;
                }
                
            else
            {
                echo "first num be greater then second num";
            }   

        }
    if ($operation=="*")
    {
    $result= $num1*$num2;
    echo $result;
    }
    if ($operation=="/")
        {
            if($num1>=$num2)
            {
                $result= $num1/$num2;
                echo $result;
            }
            else{
                echo " divider should be less then divident";
            }
        }
}

calculate(10,20,"/  ");
?>
