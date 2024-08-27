
<?php
function saurabh(){

    return 1+2;
}
function hello($name="sulav"){
 
    echo  "\n hello , " .  $name;

}

function adder($num1 = 0, $num2 = 1){

    echo "\n\n". $num1+$num2;
}
$num = saurabh();
echo $num;

echo hello("saurabh");
echo hello();

adder(1);

?>