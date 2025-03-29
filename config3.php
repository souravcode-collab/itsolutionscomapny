<?php

$host="localhost";
$user="root";
$pass="";
$db="techdt";
$con=mysqli_connect($host,$user,$pass,$db);
if($con){
    // echo" submited ";
}
else{
    echo" not submitted";
}
?>

