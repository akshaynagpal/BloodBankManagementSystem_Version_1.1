<?php
require 'connection.php';

$name=$_POST['name'];

$uname=$_POST['username'];

$pass=$_POST['password'];

$dob=$_POST['dob'];

$gender=$_POST['gender'];

$bgroup=$_POST['bgroup'];

$weight=$_POST['weight'];

$mob=$_POST['mobile'];

$address=$_POST['address'];

$area=$_POST['area'];

$city=$_POST['city'];

$state=$_POST['state'];

$pincode=$_POST['pincode'];

$email=$_POST['email'];

$dolbd=$_POST['dolbd'];


$cmd1="INSERT INTO donor_details VALUES('','$name','$uname','$pass','$dob','$gender','$bgroup','$weight','$mob','$address','$area','$city','$state','$pincode','$email','$dolbd')";

$res=mysqli_query($sql,$cmd1);

if($res)

echo "success! values inserted! Thank you!";

else
 
echo "error!!";
?>
<html>
<a href="index.php">Go to home page </a>
</html>
