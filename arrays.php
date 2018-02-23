<?php
// arrays

// $myarray = array(   "manoj",
//                     "sai",
//                     "surya"
//                 );

// $myarray[3] = "hello";
// $myarray[6] = "hai";

// echo "<br>";
// echo count($myarray);
// echo "<br>";
// for($i=0;$i<count($myarray);$i++){
//     echo $myarray[$i];
//     echo "<br>";
// }
// echo "<pre>";
// print_r($myarray);


// foreach($myarray as $val){
//     echo $val;
//     echo "<br>";
// }
// echo "<br>";
// $myarray2 = array(  "name1"=>"manoj",
//                     "name2"=>"sai",
//                     "name3"=>"surya"
//                 );
// // echo $myarray2['name'];
// foreach($myarray2 as $key=>$val){
//     echo $key." : ".$val;
//     echo "<br>";
// }


// echo $myarray2['name2'];


// $myarray3 = array(   
//                 array(
//                     array("manoj1","sai1","surya1"),
//                     array("manoj2","sai2","surya2"),
//                     array("manoj3","sai3","surya3")
//                 ),
//                 array(
//                     array("manoj4","sai4","surya4"),
//                     array("manoj5","sai5","surya5"),
//                     array("manoj6","sai6","surya6")
//                 ),
//                 array(
//                     array("manoj7","sai7","surya7"),
//                     array("manoj8","sai8","surya8"),
//                     array("manoj9","sai9","surya9")
//                 )
//             );

// foreach($myarray3 as $arr1){
//     foreach($arr1 as $arr2){
//         foreach($arr2 as $arr3){
//             echo $arr3;
//             echo "  ";
//         }
//         echo "<br>";
//     }
//     echo "<br>";
// }

$firstname = "teja";
$secondname = "varma";
$percentage = 60;

$resumeData = array(
    'firstname'=>$firstname,
    'secondname'=>$secondname,
);

if($percentage>60){
    $resumeData['grade']="firstclass";
}else{
    $resumeData['grade']="";
}

print_r($resumeData);
echo $resumeData['firstname'];
?>