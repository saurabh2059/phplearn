<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays</title>
</head>
<body style="background: grey;">
    
<?php


// $fruit01 = ["apple","banana","cherry",];

// // echo $fruit01[1];
// $fruit01 []= "orange";   //to add in array
// array_push($fruit01 , "mango");
// // echo $fruit01[3];

// // unset($fruit01[1]); // to remove data whole index also

// array_splice($fruit01, 0,1);

// echo $fruit01[1]."<br>";




// $tasks = [
//    "laundary" => "saurabh",
//      "trash" =>"sulav",
//      "vaccum" =>"aashish",
//      "dishes" =>"madhav",
// ];
// $tasks["dusting"] = "aaaaaa";
// echo $tasks["trash"];
// print_r($tasks);
// echo "<br>";
// print_r($fruit01);
// echo "<br>";
// echo count($tasks);
// echo "<br>";
//  sort($tasks);
//  print_r($tasks);





$fruit01 = ["apple","banana","cherry",];
$test = ["Test1","Test2"];


array_splice($fruit01, 1,0, $test);

print_r($fruit01);

$food = [

   "fruits"=> ["apple","mango"],
   "icecream"=> ["vanilla","strawberry"],
];

echo $food["fruits"][1];


?>



</body>
</html>