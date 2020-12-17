<?php

include  'config.php';

    $name = $_GET['name'];
    $email = $_GET['email'];
    $address = $_GET['address'];


    mysqli_query($Con, "INSERT INTO `tblusers`(`Name`, `Email`, `Address`) VALUES ('$name' , '$email', '$address')");

    header('Location:index.php');
?>