<?php
session_start();
if(isset($_SESSION['id'])){
    header('location:dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Voting System -Registration Page</title>
</head>

<body class="bg-warning">
    <h1 class="text-center p-3">Voting System</h1>
    <div class="bg-light py-4">
        <h2 class="text-center text-info">Register Account</h2>
        <div class="container text-center">
            <form action="../actions/resister.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="username"
                        placeholder="Enter your username" required="required">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="mobile"
                        placeholder="Enter your mobile number" required="required">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="password"
                        placeholder="Enter your password" required="required">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="cpassword"
                        placeholder="Enter your confirm password" required="required">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control w-50 m-auto" name="photo">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-info my-4">Resister</button>
                <p class="text-info">Already have an account? <a href="../" class="text-dark"> Login here</a></p>
            </form>
        </div>
    </div>

</body>

</html>