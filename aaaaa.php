<!-- 

<?php

$num3 = "l";
$num2  = 10;


if($num2 > $num3){

    echo $num2;

}else{
    echo $num3;
}


$array = [1,2,3,4,5,6,7,8];

print_r($array);

$data = array('roll' =>101, 'name'=> 'saurabh aryal', 'marks'=>89.90);
echo "<br>";

print_r($data);

//numeric array : keys start with 0;

// associative arrays: having any or all keys as string
echo "<br>";
echo "<ul> ";

foreach ($data as $key => $value) {

   echo '<li>'. $key . "\t". $value."</li>";
}
echo "</ul>";

?>
 -->

 <?php

$data = array();

$data2[]= array(1,2,2);

$data3= array(
    array(101,'saurabh',3),
    array(102,'sugam',3),
    array(103,'aashan',3),


);

print_r($data2);
print_r($data3);



?>




