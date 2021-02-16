<?php
	$conn =mysqli_connect('localhost','root','giveaccess','mydata');

if(isset($_POST['id'])){
	$id=$_POST['id'];
	$task=$_POST['task'];
	$time1=$_POST['time'];
	$result = mysqli_query($conn, "UPDATE `task_table` 
	SET
	task='$task' WHERE id=$id" );
	// $re=mysqli_query($conn, "UPDATE `task_table` SET time_kept =now()" );
	if($result)
	{
		return "Data Updated";
	}
}
else{
	echo "Not Connceted";
}

?>