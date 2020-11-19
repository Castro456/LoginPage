<?php
if(empty($_POST['add']) )   //|| empty($_POST['add1'])
{
    header("location:add.php");
}
else if(isset($_POST['addbtn']))
{
    session_start();
    require_once('signupconfig.php');
    $adddata = $_POST['add'];
    $adduser = $_SESSION["id"];
    $addtask = 1;
    // $query_run=mysqli_query($con,$queryforview);
    // $query_execute=mysqli_fetch_assoc($query_run);  
    // $donedata= @$query_execute['tr'];  
    $sql="INSERT into task_table(task,user,progress)  VALUES(?,?,?) ";
    $stmtinsert = $db->prepare($sql);
    $result=$stmtinsert->execute([$adddata,$adduser,$addtask]);
    header("location:add.php");
}

// FOREIGN KEY ('tr') REFERENCES simple_table('id')
?>