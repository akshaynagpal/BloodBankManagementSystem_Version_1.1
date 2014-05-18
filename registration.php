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
          prog.attr("value","5");
          progMsg.text("5 %");
        }
        if(numValid==2)
        {
          prog.attr("value","10");
          progMsg.text("10 %");
        }
        if(numValid==3)
        {
          prog.attr("value","15");
          progMsg.text("15 %");
        }
        if(numValid==4)
        {
          prog.attr("value","20");
          progMsg.text("20 % :)");
        }
        if(numValid==5)
        {
          prog.attr("value","25");
          progMsg.text("25 % :)");
        }
        if(numValid==6)
        {
          prog.attr("value","30");
          progMsg.text("30 % :)");
        }
        if(numValid==7)
        {
          prog.attr("value","35");
          progMsg.text("35 % :)");
        }
        if(numValid==8)
        {
          prog.attr("value","40");
          progMsg.text("40 % :)");
        }
        if(numValid==9)
        {
          prog.attr("value","45");
          progMsg.text("45 % :)");
        }
        if(numValid==10)
        {
          prog.attr("value","50");
          progMsg.text("50 % :)");
        }
        if(numValid==11)
        {
          prog.attr("value","55");
          progMsg.text("55 % :)");
        }
        if(numValid==12)
        {
          prog.attr("value","60");
          progMsg.text("60 % :)");
        }
        if(numValid==13)
        {
          prog.attr("value","65");
          progMsg.text("65 % :)");
        }
        if(numValid==14)
        {
          prog.attr("value","70");
          progMsg.text("70 % :)");
        }
        if(numValid==15)
        {
          prog.attr("value","90");
          progMsg.text("90 % :)");
        }
        if(numValid==16)
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
name :<input required type="text" name="name" id="name"><br>
username:<input  required type="text" id="username" name="username">
password:<input required type="password" name="password">
dob:<input required required type="date" name="dob" id="dob"><br>
gender:<input  type="radio" name="gender" value="male">Male
<input  type="radio" name="gender" value="female">Female<br>
blood group:<input required id="bgroup" name="bgroup" list="blood_groups">
<datalist id="blood_groups">
  <option value="A+">
  <option value="B+">
  <option value="AB+">
  <option value="O+">
  <option value="A-">
  <option value="B-">
</datalist><br>
weight:<input required type="number" name="weight" id="weight">  <br>
mobile:<input required id="mobile" type="tel" name="mobile" pattern="[0-9]{10}" title="Only 10 digit Numeric!"><br>
address:<textarea rows="3" cols="30" name="address"></textarea><br>
area:<input required type="text" name="area" id="area"><br>
city:<input required type="text" name="city" id="city"><br>
state:<input required type="text" name="state" id="state"><br>
pincode:<input required type="number" name="pincode" id="pincode" pattern="[0-9]{6}" title="Please enter valid pincode"><br>
email:<input required type="email" name="email" id="email"><br>
sms alert: <input type="radio" value="yes">Yes <input type="radio" value="no">No<br>
date of last blood donation:<input required type="date" name="dolbd" id="dolbd"><br>

<input  type="submit">
</form>

    </div>
</body>
<div id="footer">
<?php include 'footer.php'; ?>
</div>
</div>
</html>