<?php
    session_start();
    function loc(){
        header('Location: index.php');
    }

    $mysql = new mysqli("localhost", "root", "", "SignUp");
    $mysql->query("SET NAMES 'utf8'");

    $userName = htmlspecialchars(trim($_POST['userName']));
    $userSurname = htmlspecialchars(trim($_POST['userSurname']));
    $userPass = htmlspecialchars(trim($_POST['userPass']));
    $userEmail = htmlspecialchars(trim($_POST['userEmail']));

    if(strlen($userName) <=1) {
        $_SESSION['userNameError'] = 'Введите корректное имя';
        loc();
    } else if(strlen($userName) <=1) {
        $_SESSION['userSurnameError'] = 'Введите корректную фамилию';
        loc();
    } else if(strlen($userPass) <= 5){
        $_SESSION['userPassError'] = 'Введите корректный пароль';
        loc();
    } else if(strlen($userEmail) <= 5 || strpos('@', $userEmail)){
        $_SESSION['userEmailError'] = 'Введите корректную почту';
        loc();
    } else {
        unset($_SESSION['userNameError']);
        unset($_SESSION['userSurnameError']);
        unset($_SESSION['userPassError']);
        unset($_SESSION['userEmailError']);

        $_SESSION['userName'] = $userName;
        $_SESSION['userSurname'] = $userSurname;
        $_SESSION['userPass'] = $userPass;
        $_SESSION['userEmail'] = $userEmail;

        $userPass = md5($userPass);

        $mysql->query("INSERT INTO `users` (`name`, `surname`, `password`, `email`) VALUES ('$userName', '$userSurname', '$userPass', '$userEmail')");
        
        loc();
    }

    $mysql->close();
?>