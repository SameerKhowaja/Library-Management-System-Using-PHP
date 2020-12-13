<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$category_id=$_POST['category_id'];
$category_name=$_POST['book_category'];

mysqli_query($conn,"UPDATE `category` SET `classname`='$category_name' WHERE `category_id`='$category_id'")or die(mysqli_error());

header('location:books.php');
}

if (isset($_POST['delete_submit'])){
    $category_id=$_POST['category_id'];
    $confirm=$_POST['confirm_box'];
    
    if($confirm == "YES" || $confirm == "yes" || $confirm == "Yes"){
        mysqli_query($conn,"DELETE FROM `category` WHERE `category_id`='$category_id'")or die(mysqli_error());
    }
    
    header('location:books.php');
}
?>	