<?php
$conn =mysqli_connect('localhost','root','giveaccess','mydata');


if(isset($_POST['delete']))
{
    $key= $_POST['delete'];
    $querydelete="DELETE  FROM task_table WHERE id=$key "; 
    $value=mysqli_query($conn,$querydelete);
    echo "Deleted";
}
else{
echo"Problem Occured";
}

?>