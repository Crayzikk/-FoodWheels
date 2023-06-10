<?php 
    session_start();
    unset($_SESSION['users']);
    header("Location: http://localhost/Test%20task%20ElifTeach%20School/templates/main.php")
?>