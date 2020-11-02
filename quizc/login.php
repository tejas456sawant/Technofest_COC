<?php
session_start();
if (isset($_SESSION["username"])) {
    session_destroy();
}
include_once 'dbConnection.php';
$ref      = @$_GET['q'];
$mob = $_POST['phno'];
$password = $_POST['password'];
/*
$username = stripslashes($username);
$username = addslashes($username);
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);
*/
$result = mysqli_query($con, "SELECT * FROM user WHERE mob_no = '$mob' and password = '$password'") or die('Error');
$count = mysqli_num_rows($result);
if ($count == 1) {
    while ($row = mysqli_fetch_array($result)) {
        $name = $row['Team_Name'];
        $mob_new = $row['mob_no'];
    }
    $_SESSION["name"]     = $mob_new;
    $_SESSION["username"] = $name;
    header("location:account.php?q=1");
} else
    header("location:$ref?w=Wrong Username or Password");


?>