<?php
session_start();
// print_r($_SESSION['id']);
// die;
// if(isset($_SESSION['id'])){
//     header('location:../partials/dashboard.php');
// }
include('connect.php');

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$std = $_POST['std'];

try {
    $sql = "Select * from `userdata` where username = '$username' and mobile = '$mobile' and password = '$password' and standard = '$std'";
    $result = mysqli_query($con, $sql);
} catch (\Throwable $th) {
    print_r($th);
}
echo "<pre/>";

// while($row = mysqli_fetch_assoc($result)){
//     print_r($row);
// }

if (mysqli_num_rows($result) > 0) {
    try {
        $sql = "Select username,photo,votes,id from `userdata` where standard = 'group'";
        $resultgroup = mysqli_query($con, $sql);

        if (mysqli_num_rows($resultgroup) > 0) {
            $group = mysqli_fetch_all($resultgroup, MYSQLI_ASSOC);            
            $_SESSION['groups'] = $group;            
        }
    } catch (\Throwable $err) {
        print_r($err);
    }

    $data = mysqli_fetch_array($result);
    $_SESSION['id'] = $data['id'];
    $_SESSION['status'] = $data['status'];
    $_SESSION['data'] = $data;
    echo '<script>    
    window.location="../partials/dashboard.php";
    </script>';

} else {
    echo '<script>
    alert("Invalid credentials");
    window.location="../";
    </script>';
}
?>