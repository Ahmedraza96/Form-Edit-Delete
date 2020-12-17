<?php

include 'config.php';

$id = $_GET['ID'];

mysqli_query($Con, "DELETE FROM `tblusers` WHERE id = $id");

header('Location:index.php')

?>