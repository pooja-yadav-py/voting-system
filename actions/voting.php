<?php
session_start();
include('connect.php');

$votes = $_POST['groupvotes'];
$totalvotes = $votes+1;

$gid = $_POST['groupid'];
$_SESSION['votedgroup'] = $gid;
$uid = $_SESSION['id'];

$updatevotes = mysqli_query($con,"update `userdata` set votes='$totalvotes' where id = '$gid'");
$updatestatus = mysqli_query($con,"update `userdata` set status=1 where id='$uid'");

if($updatevotes and $updatestatus){
    $getgroups = mysqli_query($con,"Select username,photo,votes,id from `userdata` where standard = 'group'");
    $gropus = mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['groups'] = $gropus;
    $_SESSION['status'] = 1;
    echo "lll";
    echo '<script>
    alert("Voting Successfull");
    window.location="../partials/dashboard.php";
    </script>';
}else{
    echo '<script>
    alert("Technical error!! Vote after sometime");
    window.location="../partials/dashboard.php";
    </script>';
}

?>