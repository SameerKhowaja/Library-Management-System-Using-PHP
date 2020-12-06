<?php
include('dbcon.php');

$id=$_GET['id'];

mysqli_query($conn,"delete from users where user_id='$id'") or die(mysqli_error());

header('location:users.php');
?>