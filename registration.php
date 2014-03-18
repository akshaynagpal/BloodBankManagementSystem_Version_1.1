<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
	$("#reg_form").keyup(function(){
			var numValid=0;
			$("#reg_form input[required]").each(function(){
				if (this.validity.valid)
					{ numValid++; }
			});

			var prog = $("#progress") , progMsg = $("#progress_message");
			if(numValid==1)
				{
					prog.attr("value","25");
					progMsg.text("25 %");
				}
				if(numValid==2)
				{
					prog.attr("value","50");
					progMsg.text("50 %");
				}
				if(numValid==3)
				{
					prog.attr("value","75");
					progMsg.text("75 %");
				}
				if(numValid==4)
				{
					prog.attr("value","100");
					progMsg.text("100 % :)");
				}

	});

});

</script>
<div class="container">

<div class="heading">
	<?php include 'header.php'; ?>
	</div>
</head>
<body>
	<div id="content">

		<h2>Registration Form</h2><hr>
		Your progress: <progress max="100" value="0" id="progress"></progress> <div id="progress_message">0 % :(</div>
<hr>
<form id="reg_form" action="submit_form.php" method="POST">
E-mail: <input required type="email" name="email" id="email"><br>
Date of Birth: <input required type="date" name="dob" id="dob"><br>
Mobile No.:<input required id="phone" type="tel" name="phone" pattern="[0-9]{10}" title="Only 10 digit Numeric!"><br>
Blood Group:<input required id="bgroup" name="bgroup" list="blood_groups">
<datalist id="blood_groups">
	<option value="A+">
	<option value="B+">
	<option value="AB+">
	<option value="O+">
	<option value="A-">
	<option value="B-">
</datalist><br>
<input  type="submit">
</form>

		</div>
</body>
<div id="footer">
<?php include 'footer.php'; ?>
</div>
</div>
</html>