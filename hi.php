<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

$name = "sulav";
echo"$name is a php learner";
    
    ?>

<br>
<?php if(true){ ?>


 <p>is a php learner</p>


<?php }   ?>

<?php 

$names = ["saurabh", "aryal", "sulav"];
$surname = array("Arual", "pp", "kw");

?>


<?php 
for ($i = 0; $i < 3; $i++) {   ?>
   
 <p> The value  is: <?php echo" $names[$i] , $surname[$i]"; ?>  </p>  
 
  
<?php
};

?>


<?php
// The target path where you want to redirect the user
$new_page = './home.php';

// Redirect to the new page
header('Location: ' . $new_page);

// Make sure no further code is executed after the redirect
exit();
?>


</body>
</html>