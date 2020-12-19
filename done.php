<?php
$conn =mysqli_connect('localhost','root','giveaccess','mydata');

if(isset($_POST['done']))
{
    
    $key= $_POST['done'];
    $querydone="UPDATE task_table SET progress = 2 WHERE id = $key "; 
    $value=mysqli_query($conn,$querydone);
    echo "Task Marked as Done";

}

else{
    header("location:index.php");
}

?>