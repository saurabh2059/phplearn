<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:#cccccc;">
    

<?php

$data = array();

$data2[]= array(1,2,2);

$data3= array(
    array( 'roll'=> 101,'name'=>'saurabh', 'marks'=> 3),
    array( 'roll'=> 101,'name'=>'saurabh', 'marks'=> 3),
    array( 'roll'=> 101,'name'=>'saurabh', 'marks'=> 3),
    array( 'roll'=> 101,'name'=>'saurabh', 'marks'=> 3),
   


);


// print_r($data2);
// print_r($data3);



?>


<table class="table bg-secondar" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Roll</th>
      <th scope="col">Name</th>
      <th scope="col">Marks</th>
    </tr>
  </thead>
  <tbody>
   
  <?php 



  foreach($data3 as $key => $value){   ?>

  <tr>
    
      <th scope="row">1</th>
      <td> <?php echo $value['roll']; ?></td>
      <td><?php echo $value['name']; ?></td>
      <td><?php echo $value['marks']; ?></td>
    </tr>
    
    <?php } ?>
  </tbody>
</table>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>