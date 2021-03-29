<?php
$server="localhost";
$username="root";
$password="";
$database="gtube";


 $conn =mysqli_connect($server,$username,$password,$database);
 if($conn){
     echo "success";
    }
    else{
        echo "connection not establish";

 }

 
 
?>