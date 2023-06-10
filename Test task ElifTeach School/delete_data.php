<?php

require "connect.php";

if(isset($_POST['id'])) 
{
    $id = $_POST['id'];

    mysqli_query($connect,"DELETE FROM `food` WHERE `id` = '$id'");
}


?>