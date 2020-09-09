 <?php
  $host = 'localhost';
  $user = 'root';
  $password = 'giveaccess';
  $db = 'mydata';
  
  $con = @mysqli_connect($host, $user, $password, $db);                                             
  mysqli_select_db($con,'mydata');

  ?>