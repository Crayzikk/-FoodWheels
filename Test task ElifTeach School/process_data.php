<?php
require "connect.php";


if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['image']) && isset($_POST['number'])) 
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_POST['image'];
    $number = $_POST['number'];
    mysqli_query($connect, "INSERT INTO `food` (`id`, `name`, `price`, `img`, `number`) VALUES (NULL, '$name', '$price', '$img', '$number')");
}
?>
