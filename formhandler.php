<?php


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = htmlspecialchars($_POST["name"]);
    $age = htmlspecialchars($_POST["age"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);
    // sanitize the data and convert the data if it is mallicious code to html chars and not code
    //eg & < > and so on
    // if use htmlentities() converts all the code  intead of taking only special characters
    if(empty($name)){

        echo"error";
      
        header("Location: ./index.php");
          exit();
    }

    echo" these are the datas submitted by user: <br>";

    echo "$name, <br> $age,<br>  $favouritepet ";
    header("Location: ./index.php");
    
}else{
    header("Location: ./index.php");
}
?>