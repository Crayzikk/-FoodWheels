<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        session_start();
        require_once 'connect.php';

        $login = $_POST['login'];
        $psw = $_POST['password'];

        $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `name` = '$login' AND `password` = '$psw' ");
        
        if (mysqli_num_rows($check_user) > 0) 
        {
            $users = mysqli_fetch_assoc($check_user);
        
        $_SESSION['users'] = [
            "id" => $users['id'],
            "name" => $users['name'],
            "email" => $users['email']
            ];
            header("Location: http://localhost/Test%20task%20ElifTeach%20School/templates/profile.php");
        } 
        else 
        {
            echo "<script>alert('Аккаунт не знайдено!'); window.history.back();</script>";   
        }
    }

    
?>