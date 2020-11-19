<?php
// if(empty($_POST['add']) )   //|| empty($_POST['add1'])
// {
//     header("location:add.php");
// }
// require_once('signupconfig.php');
// //$adddata = $_POST['add'];
// $addtask = 1;
// // $query_run=mysqli_query($con,$queryforview);
// // $query_execute=mysqli_fetch_assoc($query_run);  
// // $donedata= @$query_execute['tr'];  
// $sql="UPDATE done_table SET COM='$addtask' WHERE id='1'";
// $stmtinsert = $db->prepare($sql);
// $result=$stmtinsert->execute();


if(isset($_POST['addbtn']))
{
    require_once('signupconfig.php');
    $adddata = $_POST['add'];
    $addtask = 3;
    $sql="INSERT into done_table(Done_Task,COM)  VALUES(?,?) ";
    $stmtinsert = $db->prepare($sql);
    $result=$stmtinsert->execute([$adddata,$addtask]);
}

// FOREIGN KEY ('tr') REFERENCES simple_table('id')
?>