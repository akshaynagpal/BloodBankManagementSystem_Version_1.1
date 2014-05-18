<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" type="text/css" href="style.css">


</head>

<div class="container">

<div class="heading">
	
<?php include 'header.php'; ?>
	
</div>

<body>
	

<div id="content">

<div class="left1">

<h2>Find Donor!</h2>  <!--box 1-->

<form action="search.php" method="POST">
City: <input id="city" name="city" type=text><br><br>
Blood Group:<select id="bgroup" name="bgroup">
<option value="A+">A+</option>
<option value="AB+">A+</option>
<option value="B+">B+</option>
<option value="O+">O+</option>
</select><br><br>
<input type="submit" value="Search">
</form>

</div>


<div class="left1">  <!--box 2-->


<div class="l2text">

<h2>Are you ready to save a life?</h2>
North Avenue Blood Bank a non-profit, non-commercial interface was born out of our social commitment and our desire to use the power of the Internet to help common people. <br><br>

<div class="regbutton">

<a href="registration.php"><strong>&nbsp Register Here FREE! &nbsp</strong></a>
</div> 
<!-- reg button-->

</div> <!--l2text -->

</div>  <!--left2-->


<a href="tips.php">
<div class="left1">    <!--box 3-->
<h3>Tips on donating blood!</h3>
<img src="tips-img.jpg" style="float:left;">
You are noble, but you got to be informed as well.
</div>
</a>

<a href="facts.php">
<div class="left1">
<h3> Blood Facts!</h3>   <!--box 4-->
<img src="fact-img.jpg" style="float:left;">
A whole world in itself, blood is a living matter!
</div></a>
</div>
</body>
<div id="footer">
<?php include 'footer.php'; ?>
</div>
</div> <!--container -->
</html>