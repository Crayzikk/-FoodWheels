<?php 
require "connect.php";

if (isset($_POST['number']) && isset($_POST['price']) && isset($_POST['name'])) 
{
    $number = $_POST['number'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $currentDate = date('Y-m-d');

    mysqli_query($connect, "INSERT INTO `history` (`name`, `price`, `number`, `date`) VALUES ('$name', '$price', '$number', '$currentDate')");
    mysqli_query($connect,"DELETE FROM `food`");
  }

?>