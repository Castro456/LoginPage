<?php
require 'loginconfig.php';

if(empty($_POST['keytodelete']))
{
    header("location:view.php");
}

else if(isset($_POST['submitdelete']))
{
    $key = $_POST['keytodelete'];
    if(is_array($key))
    {
            for($i=0 ; $i <= count($key) ; $i++) {
            $querydelete="DELETE  FROM task_table WHERE id='$key[$i]'"; 
            $value=mysqli_query($con,$querydelete);
            header("location:view.php");
                
    } 
        

    }

}

?>