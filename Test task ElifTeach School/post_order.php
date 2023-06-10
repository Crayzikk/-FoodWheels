<?php

require "connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $city = $_POST['city'];
    $adres = $_POST['adres'];
    $num = $_POST['num'];

    mysqli_query($connect, "INSERT INTO `order` (`id`, `city`, `adres`, `num`) VALUES (NULL, '$city', '$adres', '$num')");
    header("Location: http://localhost/Test%20task%20ElifTeach%20School/templates/profile.php");
}

?>