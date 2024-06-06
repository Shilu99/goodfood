<?php
  $con=mysqli_connect("localhost", "root", "123456", "foodgooddb");
  if(mysqli_connect_errno()){
    echo "Connection Fail".mysqli_connect_error();
  }
?>
