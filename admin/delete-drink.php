<?php
include("connection.php"); 
$q = "delete from drinklist where id='{$_GET['id']}'";
$con->query($q);
unlink("img/".$_GET['img']);
header('location:drink.php');
?>