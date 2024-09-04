<?php


// fucntion name($args){
//  holds multiple data pointer type  }


// function connects to the database
function connect_oracle(){


    $link  = oci_connect('HR','hr','//localhost/XEPDB1')
        or die("not connected to db");

        if($link){
            return $link;
        }
        else{
            return false;
        }

}

// function to close the database

function close_oracle($link){
    oci_close($link);
}


?>

<?php
// load the function definitions

require 'database_function.php';// databsae_function is the anonther php file where the functions are loacated


// load to retrieve the jobs

function getalljobs(){
    //connect to the database
    $link = connect_oracle();
    //prepare the url
    $sql = "SELECT * FROM JOBS";


    //parse the sql query
    $stmt = oci_parse($link, $sql) or die(oci_error($link));

    //execute the sql query
    $resultSet = oci_execute($stmt);

    //prepare the data
    $data =array();
    while($row = oci_fetch_assoc($stmt)){
        array_push($data , $row);
    }
    //close the connection

    oci_close($link);
    //return the data

    return $data;



}


?>