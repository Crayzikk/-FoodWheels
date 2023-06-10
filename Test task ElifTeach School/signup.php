<?php 

    session_start();

    $login = $_POST['login'];
    $psw = $_POST['password'];
    $confrim_psw = $_POST['confrim_password'];
    $email = $_POST['email'];
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        require_once 'connect.php';

        if (!$login)
        {
           echo "<script>alert('Введіть логін!'); window.history.back();</script>";
            exit(); 
        }
        

        if (strlen($login) < 4)
        {
            echo "<script>alert('Логін має бути не менше 4 символів!'); window.history.back();</script>";
            exit();
        }
        
        if (!$email)
        {
             echo "<script>alert('Введіть email!'); window.history.back();</script>";
            exit();
        }

        if (!$psw)
        {
            echo "<script>alert('Введіть пароль!'); window.history.back();</script>";
            exit();
        }
            
        if ($psw < 6 || $confrim_psw < 6)
        {
            echo "<script>alert('Пароль має бути не менше 6 символів!'); window.history.back();</script>";
            exit(); 
        }
            
        if (!$confrim_psw)
        {
            echo "<script>alert('Підтвердіть пароль!'); window.history.back();</script>";
            exit();  
        }
            
        if ($psw != $confrim_psw)
        {
            echo "<script>alert('Ваші паролі не співпадають! Спробуйте ще раз.'); window.history.back();</script>";
            exit();
        }
        
        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES (NULL, '$login', '$psw', '$email')");
        header("Location: http://localhost/Test%20task%20ElifTeach%20School/templates/login.php");
    }
?>