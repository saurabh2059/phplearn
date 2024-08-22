<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calc</title>
</head>
<body>
    
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >

<input type="number" name="num1" placeholder="number 1 ">
<select name="operator">
    <option value="add">+</option>
    <option value="min">-</option>
    <option value="mul">*</option>
    <option value="div">/</option>
    <option value="mod">%</option>
</select>
<input type="number" name="num2" placeholder="number 2 ">




<button type="submit"> CALCULATE</button>


</form>
   
<?php
     if( $_SERVER["REQUEST_METHOD"] == "POST" ){
        // grab data
        $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
        $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST['operator']);

      
      
        //error handler

        $error= false;
        if( empty($num1)|| empty($num2) || empty($operator) ){
            echo " filll all input";
            $error = true;
        }
        if(!is_numeric($num1) || !is_numeric($num2)){
            echo "enter number value";
            $error=true;
        }
        // calculate the number if no error

        if(!$error){
            $value = 0;
                switch($operator){

                    case "add":
                      $value =   $num1+$num2;
                      break;
                    case "min":
                      $value =   $num1-$num2;
                      break;
                    case "mul":
                      $value =   $num1*$num2;
                      break;
                    case "div":
                      $value =   $num1/$num2;
                      break;
                    case "mod":
                      $value =   $num1%$num2;
                      break;

                      default:
                      echo "not identified operator";
                }

        }

        echo "result is " . $value ;
     }

?>





</body>
</html>