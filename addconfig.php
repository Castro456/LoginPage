<?php
$conn =mysqli_connect("localhost","root","giveaccess","mydata");

if(empty($_POST['add1']) )   
{
   echo"Enter a task to ADD";
}
else if(isset($_POST['add1']))
{
    session_start();
    $task = $_POST['add1'];
    $addedtask = mysqli_real_escape_string($conn,$task);
    $adduser = $_SESSION["id"];
    $addtask = 1;

    $query="INSERT INTO task_table(task,user,progress) VALUES ('$addedtask','$adduser','$addtask')";
    if(mysqli_query($conn,$query))
    {
    echo "Task Added";
    }
    else
    {
    echo "Problem occured";
    }
}

?>