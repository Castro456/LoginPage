<?php

$host = 'localhost';
$user = 'root';
$password = 'giveaccess';
$db = 'mydata';

$con = @mysqli_connect($host, $user, $password, $db);                                             
mysqli_select_db($con,'mydata');
$queryforview="SELECT tasks.id, tasks.task, tasks.time_kept, tasks.progress, users.username
FROM task_table as tasks 
join users_table as users on tasks.user = users.id";

?>