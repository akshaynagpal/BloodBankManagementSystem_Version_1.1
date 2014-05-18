<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="container">
<div class="heading"> <?php include 'header.php'; ?> </div>
<body>
	
<?php 
require 'connection.php';

$city=$_POST['city'];
$bg=$_POST['bgroup'];

$cmd = "SELECT * FROM donor_details WHERE city='$city' AND bloodgroup='$bg'";
$res = mysqli_query($sql,$cmd);

$num = mysqli_num_rows($res);
echo "Your search returned ".$num." results";
if($num>0)
{
echo "<table border='1'>
<tr>
<th>Name</th>
<th>DOB</th>
<th>gender</th>
<th>bloodgroup</th>
<th>weight</th>
<th>mobile</th>
<th>address</th>
<th>area</th>
<th>city</th>
<th>state</th>
<th>pincode</th>
<th>email</th>
<th>dateLBD</th>
</tr>
";
}
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['dob']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['bloodgroup']."</td>";
echo "<td>".$row['weight']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['address']."</td>";
echo "<td>".$row['area']."</td>";
echo "<td>".$row['city']."</td>";
echo "<td>".$row['state']."</td>";
echo "<td>".$row['pincode']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['dateLBD']."</td>";
echo "</tr>";
}
echo "</table>";
?>

</body>
<div id="footer">

<?php include 'footer.php'; ?>
</div>
</div> <!--container -->
</html>