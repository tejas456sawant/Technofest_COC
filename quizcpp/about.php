<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>COC</title>
  <link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
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
</head>

<body style="background-image:url(image/wallpaper3.png);background-size:cover;">
<div class="row header"  style="background:rgba(0,0,0,0.6);">
<div class="col-lg-6" style="margin-top:0%;">
<span class="logo">CLASH OF CODES</span></div>
<div class="col-md-2">
</div>
<div class="col-md-4">
<?php
include_once 'dbConnection.php';
session_start();
if ((!isset($_SESSION['username']))) {
    echo '<a href="#" class="pull-right logb btn btn-primary" style="margin-top:1.9%;" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"  aria-hidden="true"></span>&nbsp;<font style="font-size:12px;font-weight:bold">Login</font></a>&nbsp;';
} else {
    echo '<a href="logout.php?q=feedback.php"  class="pull-right logb btn btn-primary"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;<font style="font-size:12px;font-weight:bold">Logout</font></a>&nbsp;';
}
?>

<a href="index.php" class="pull-right logb btn btn-primary" style="margin-top:1.9%;"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;<font style="font-size:12px;font-weight:bold">Home</font></a>&nbsp;
</div></div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:darkblue;font-weight:bold">Login to your Account</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-3 control-label" for="username"></label>  
  <div class="col-md-6">
  <input id="phno" name="phno" placeholder="Enter your Mobile-No" class="form-control input-md" type="username">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
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
<div class="bg1" style="background-image:none;background-color:transparent;min-height:658px;">
<div class="row" >
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background:#fffffs; border-radius:10px;margin-left:0%; background-size:cover; margin-top:3.9%; background-size:cover; min-height:450px;">
<h2 align="center" style="font-family:'typo'; color:#000066">TECHNOFEST 2k20</h2>
<div style="font-size:12px;font-weight:bold; margin-top:20px;word-wrap:break-word"><br />
<?php
$file = fopen("about.txt", "r");
while (!feof($file)) {
    $string = fgets($file);
    $num    = strlen($string) - 1;
    $c      = str_split($string);
    for ($i = 0; $i < $num; $i++) {
        $last = $c[$i];
        if ($c[$i] == ' ' && $last == ' ') {
            echo '&nbsp;';
        } else {
            echo $c[$i];
        }
    }
    echo "<br />";
}

fclose($file);
?>
</div>
<div class="col-md-3"></div></div>
</div></div>
</div>

<div class="row footer"  style="background:rgba(0,0,0,0.6);">
<div class="col-md-6 box">
<span href="#" data-target="#login" style="color:lightyellow">Organized by COM'E'IT, Government Polytechnic Pune, TECHNOFEST2k20<br><br></span></div>
<div class="col-md-2 box">
<a href="feedback.php" style="color:lightyellow;text-decoration:underline;margin-left:230%;" onmouseover="this.style('color:yellow')">Feedback</a></div>
<!--<div class="col-md-2 box">
<span href="about.php" s style="color:lightyellow;text-decoration:underline" onmouseover="this.style('color:yellow')">About Quizzer</span></div>-->
</div>
</body>
</html>
