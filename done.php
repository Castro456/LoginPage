<?php
require 'signupconfig.php';

if(empty($_POST['keytodelete']))
{
    header("location:view.php");
}

else if(isset($_POST['submitdone']))
{
    //print_r($_POST['keytodelete']);
    $key = $_POST['keytodelete'];
    //$addtask = 2;
    if(is_array($key))
    {
        // while($key ==0)
        // {
            for($i=0 ; $i <= count($key) ; $i++) {
                //echo $i;
                $sql="UPDATE task_table SET progress = 2 WHERE id = $key[$i] ";
                $stmtinsert = $db->prepare($sql);
                $result=$stmtinsert->execute();
                header("location:view.php");
                
            } 
        //}

    }

}

?>