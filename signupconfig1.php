<?php
  $host = 'localhost';
  $user = 'root';
  $password = 'giveaccess';
  $db = 'mydata';
  
  $con = @mysqli_connect($host, $user, $password, $db);                                             
  mysqli_select_db($con,'mydata');

  $query=$query="SELECT email FROM `simple_table` where email ='$email' ";        
  $query_run=mysqli_query($con,$query);
  $query_execute=mysqli_fetch_assoc($query_run);  
  $checkemail= @$query_execute['email'];

  ?>