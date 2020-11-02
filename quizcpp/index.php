<?php
session_start();
if(isset($_SESSION['username']) && (!isset($_SESSION['key']))){
   header('location:account.php?q=1');
}
else if(isset($_SESSION['username']) && isset($_SESSION['key']) && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39'){
   header('location:dash.php?q=0');
}
else{}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>COC</title>
   
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>
<script src="js/validate.js"  type="text/javascript"></script>
</head>
<!-- background-image:url(image/wallpaper3.png); -->
<body style="background-size:cover;background-image:url(image/download1.png);">
<div class="header" style="background:rgba(0,0,0,0.5);">
<div class="row">
<div class="col-lg-6">
<span class="logo" >CLASH OF CODES - CPP Edition</span></div>
<div class="col-md-2 col-md-offset-4" style="margin-top:-0.9%;">
<a href="#" class="btn btn-primary logb" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-log-in"  aria-hidden="true"></span>&nbsp;<span class="title1"><b> Login </b> </span></a></div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:darkblue;font-size:12px;font-weight: bold">Login to your Account</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-3 control-label" for="username"></label>  
  <div class="col-md-6">
  <input id="phno" name="phno" placeholder="Enter Mobile No" class="form-control input-md" type="username">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
    </fieldset>
</form>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="bg1" style="background-image:none;background-color:transparent;">
<div class="row">

<div class="col-md-7" ></div>
<div class="col-md-4 panel" style="border-radius:10px;margin-left:33.5%;margin-top:5.9%;margin-bottom:2.46%;"> 
  <form class="form-horizontal" name="form" action="sign.php?q=account.php"  method="post">
<fieldset>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <h2 align="center">Registration Form</h2>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <div id="errormsg" style="font-size:14px;font-family:calibri;font-weight:normal;color:red"><?php
if (@$_GET['q7']) {
    echo '<p style="color:red;font-size:15px;width:100%;">' . @$_GET['q7'];
}
else if (@$_GET['qn1']) {
  echo '<p style="color:red;font-size:15px;width:100%;">' . @$_GET['qn1'];
}
else if (@$_GET['qn2']) {
  echo '<p style="color:red;font-size:15px;width:100%;">' . @$_GET['qn2'];
}

?></div>
    
  </div>
</div>

<!--
<div class="form-group">
  <label class="col-md-12 control-label" for="rollno"></label>  
  <div class="col-md-12">
  <input id="rollno" name="rollno" placeholder="Enter your Roll no (Ex. BE/10XXX/YY)" class="form-control input-md" type="text" >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Select your gender" class="form-control input-md" >
   <option value="" <?php
if (!isset($_GET['gender']))
    echo "selected";
?>>Select Gender</option>
  <option value="M" <?php
if ($_GET['gender'] == "M")
    echo "selected";
?>>Male</option>
  <option value="F" <?php
if ($_GET['gender'] == "F")
    echo "selected";
?>>Female</option> </select>
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="branch"></label>
  <div class="col-md-12">
    <select id="branch" name="branch" placeholder="Select your branch" class="form-control input-md" >
   <option value="" <?php
if (!isset($_GET['branch']))
    echo "selected";
?>>Select Branch</option>
  <option value="CSE" <?php
if ($_GET['branch'] == "CSE")
    echo "selected";
?>>Computer Science and Engineering</option>
  <option value="ECE" <?php
if ($_GET['branch'] == "ECE")
    echo "selected";
?>>Electronics and Communication Engineering</option>
  <option value="EEE" <?php
if ($_GET['branch'] == "EEE")
    echo "selected";
?>>Electrical and Electronics Engineering</option>
  <option value="IT" <?php
if ($_GET['branch'] == "IT")
    echo "selected";
?>>Information Technology</option>
  <option value="CHEM" <?php
if ($_GET['branch'] == "CHEM")
    echo "selected";
?>>Chemical Engineering</option>
  <option value="CIVIL" <?php
if ($_GET['branch'] == "CIVIL")
    echo "selected";
?>>Civil Engineering</option> 
  <option value="MECH" <?php
if ($_GET['branch'] == "MECH")
    echo "selected";
?>>Mechanical Engineering</option> 
  <option value="BIOTECH" <?php
if ($_GET['branch'] == "BIOTECH")
    echo "selected";
?>>Biotechnology</option> 
  <option value="IMSC" <?php
if ($_GET['branch'] == "IMSC")
    echo "selected";
?>>Integrated MSc</option> </select>

  </div>
</div>
-->

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="teamname" name="teamname" placeholder="Enter Your Team Name" class="form-control input-md" type="text" required>
    
  </div>
</div>

<!-- Applicant Names -->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="username"></label>
  <div class="col-md-12">
    <input id="applicant_1" name="applicant_1" pattern="[A-Za-z ]+" title="Only Alphabets Are Allowed"
     placeholder="Enter First Applicant Full Name" class="form-control input-md" type="username" 
     style="<?php
if (isset($_GET['qn2']))
    echo "border-color:red";
?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label title1" for="username"></label>
  <div class="col-md-12">
    <input id="applicant_2" name="applicant_2" pattern="[A-Za-z ]+" title="Only Alphabets Are Allowed"
     placeholder="Enter Second Applicant Full Name" class="form-control input-md" type="username"
     style="<?php
if (isset($_GET['qn2']))
    echo "border-color:red";
?>" >
    </div>
    </div>

<div class="form-group">
  <label class="col-md-12 control-label" for="phno"></label>  
  <div class="col-md-12">
  <input id="phno" name="phno" pattern="[\d]{10}" title="Mobile Number Must Be Of 10 Digits" 
  placeholder="Enter your Mobile Number" class="form-control input-md" type="text"
  style="<?php
if (isset($_GET['q7']))
    echo "border-color:red";
?>" required>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>  
  <div class="col-md-12">
  <input id="email" name="email" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}"
  title="Enter Correct Email Address" placeholder="Enter your E-mail Address" class="form-control input-md" type="email" required>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" pattern="[\W\w]{6,}" title="Password Must Be Greater Than 5 Characters"
     name="password" placeholder="Enter your password" class="form-control input-md" type="password" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" pattern="[\W\w]{5,}" title="Password Must Be Greater Than 5 Characters"
     name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password" required>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12" style="text-align: center"> 
    <input  type="submit" value=" Register Now " class="btn btn-primary" style="border-radius:30px;width:30%;text-align:center" />
  </div>
</div>

</fieldset>
</form>
</div>

</div></div>

</div>



<div class="row footer" style="background:rgba(0,0,0,0.6);margin-top:8%;">
<div class="col-md-6 box" onmouseover="style='cursor:default;color:lightyellow;'">
<span href="#" data-target="#login" style="color:lightyellow">Organized by <span href="#" data-toggle="modal" data-target="#login" style="color:lightyellow;text-decoration: none;cursor:default; " >COM'E'IT</span>, Government Polytechnic Pune, TECHNOFEST2k20<br><br></span></div>
<div class="col-md-2 box">
<a href="feedback.php" style="color:lightyellow;" onmouseover="this.style('color:yellow')" target="_self">Feedback</a></div>
<div class="col-md-2 box" style="width:30%;">
<a href="about.php" style="color:lightyellow;" onmouseover="this.style('color:yellow')" target="_self">About TECHNOFEST2k20</a></div>
</div>
   <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:darkblue;font-size:12px;font-weight: bold">Login to Server</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Username" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="30" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
