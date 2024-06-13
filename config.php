<?php
$server = 'localhost';
$username= 'root';
$password= '';
$database = 'shoes';

$con=mysqli_connect($server,$username,$password,$database);

if($con){
}else{
    echo "Something Wrong";
}
?>