	<?php
 	include('dbcon.php');
	
		$id=$_POST['selector'];
 	$member_id  = $_POST['member_id'];
	$due_date  = $_POST['due_date'];

	if ($id == '' ){ 
	header("location: borrow.php");
	?>
	

	<?php }else{
	


	mysqli_query($conn,"insert into borrow (member_id,date_borrow,due_date) values ('$member_id',NOW(),'$due_date')")or die(mysqli_error());
	$query = mysqli_query($conn,"select * from borrow order by borrow_id DESC")or die(mysqli_error());
	$row = mysqli_fetch_array($query);
	$borrow_id  = $row['borrow_id']; 
	

$N = count($id);
for($i=0; $i < $N; $i++)
{
	 mysqli_query($conn,"insert borrowdetails (book_id,borrow_id,borrow_status) values('$id[$i]','$borrow_id','pending')")or die(mysqli_error());

}
header("location: borrow.php");
}  
?>
	
	

	
	