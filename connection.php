<?php

$sql= mysqli_connect('localhost','root') or die("cannot connect");

mysqli_select_db($sql,'donor_db') or die("cannot select!");

//$sql_cmd=mysqli_connect("localhost:8080","root","","donor_db");


if (mysqli_connect_errno())

{
  
echo "Failed to connect to MySQL: ".mysqli_connect_error();
  
}

?>