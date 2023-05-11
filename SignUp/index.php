<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.js">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="sign-up">
    <div class="container" style="width: 600px;">
        <h1 class="title">Sign Up</h1>
        <form action="signUp.php" method="POST">
            <input class="form-control mt-5" type="text" name="userName" placeholder="Name">
            <div class="text-danger"><?=$_SESSION['userNameError']?></div>
            <input class="form-control mt-3" type="text" name="userSurname" placeholder="Surname">
            <div class="text-danger"><?=$_SESSION['userSurnameError']?></div>
            <input class="form-control mt-3" type="password" name="userPass" placeholder="Password">
            <div class="text-danger"><?=$_SESSION['userPassError']?></div>
            <input class="form-control mt-3" type="email" name="userEmail" placeholder="Email">
            <div class="text-danger"><?=$_SESSION['userEmailError']?></div>
            <input type="submit" class="btn btn-success mt-3" value="Send">
        </form>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?=$_SESSION['userName']?></td>
                    <td><?=$_SESSION['userSurname']?></td>
                    <td><?=$_SESSION['userPass']?></td>
                    <td><?=$_SESSION['userEmail']?></td>
                </tr>
            </tbody>
        </table>    
    </div>
</div>
    
</body>
</html>