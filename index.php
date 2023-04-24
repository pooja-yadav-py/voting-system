<?php
session_start();
if(isset($_SESSION['id'])){
    header('location:partials/dashboard.php');
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

    <title>Voting System</title>
</head>

<body class="bg-warning">
    <h1 class="text-center p-3">Voting System</h1>
    <div class="bg-light py-4">
        <h2 class="text-center text-info">Login</h2>
        <div class="container text-center">
            <form action="actions/login.php" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="username"
                        placeholder="Enter your username" required="required">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="mobile"
                        placeholder="Enter your mobile number" required="required" maxlength="10" minlength="10">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="password"
                        placeholder="Enter your password" required="required">
                </div>
                <div class="mb-3">
                    <select name="std" class=" form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-info my-4">Login</button>
                <p class="text-info">Don't have an account? <a href="./partials/registration.php" class="text-dark"> Resister here</a></p>
            </form>
        </div>
    </div>

</body>

</html>