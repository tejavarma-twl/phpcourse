<?php

function findfactorial($num)
{
    $sample = [];
    for($i=1;$i<=$num;$i++)
    {
        if($num%$i==0)
        {
            array_push($sample,$i);
        }
    }
    return $fact;
}

function findcommonfactorial($num1,$num2,$num3)
{
    $factor1 = findfactorial($num1);
    $factor2 = findfactorial($num2);
     $factor3 = findfactorial($num3);
    print "<pre>";
   
    $comp = array_intersect($factor1,$factor2,$factor3);
    print_r($comp);
}

findcommonfactorial(333,444,555);
?>
