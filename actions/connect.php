<?php 
$con = mysqli_connect("localhost","root","","votingsystem");
if($con){
    echo "Connection successful";
}else{
    die(mysqli_error($con));
}
?>