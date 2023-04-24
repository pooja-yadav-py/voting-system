<?php
include('connect.php');

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$std = $_POST['std'];

if ($password != $cpassword) {
    echo '<script>
     alert("Passwords do not match"); 
     window.location = "../partials/registration.php";   
    </script>';
} else {
    // print_r($tmp_name);
    // print_r($image);
    // die;
    
    $basePath = realpath(dirname(__FILE__) . '/../');
    $destinationPath = $basePath . "/uploads/" . $image;
    
    $test =  move_uploaded_file($tmp_name, $destinationPath);
  
    $sql = "insert into `userdata` (username,mobile,password,photo,standard,status,votes) values ('$username','$mobile','$password','$image','$std',0,0)";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo '<script>
     alert("Registrattion successfull"); 
     window.location = "../";   
    </script>';
    }
}


?>