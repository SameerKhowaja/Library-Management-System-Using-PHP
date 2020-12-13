<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$book_cat=$_POST['book_category'];
/* $date_receive=$_POST['date_receive']; */
/* $date_added=$_POST['date_added']; */
								
mysqli_query($conn,"insert into category (classname) values('$book_cat')")or die(mysqli_error());

header('location:books.php');
}
?>	