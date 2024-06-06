<?php
include("connection.php"); 
$q = "delete from foodlist where id='{$_GET['id']}'";
$con->query($q);
unlink("img/".$_GET['img']);
header('location:food.php');
?>