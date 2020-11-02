<?php
include_once 'dbConnection.php';
ob_start();
$tname     = $_POST['teamname'];
$tname     = ucwords(strtolower($tname));
$applicant1 = $_POST['applicant_1'];
$applicant2 = $_POST['applicant_2'];
$mobno     = $_POST['phno'];
$email    = $_POST['email'];
$password = $_POST['password'];

$applicant1 = trim($applicant1);
$applicant2 = trim($applicant2);
//$password = stripslashes($password);
//$password = addslashes($password);
//$password = md5($password);

$q1 = mysqli_query($con, "SELECT * FROM user WHERE Team_Name='$tname'") or die('Error98');
$rowcount = mysqli_num_rows($q1);
if ($rowcount == 0) {
    if (strtolower($applicant1) != strtolower($applicant2)){
        $q3 = mysqli_query($con, "INSERT INTO user VALUES  (NULL,'$tname','$applicant1','$applicant2','$mobno','$email','$password')");
        if ($q3) {
            session_start();
            $_SESSION["username"] = $tname;
            $_SESSION["name"]     = $mobno;
            header("location:account.php?q=1");
        } else {
            header("location:index.php?q7=Please use another mobile number. Account not created.&name=$name&username=$username&gender=$gender&phno=$phno&branch=$branch&rollno=$rollno");
        }
    }
    else
    {
        header("location:index.php?qn2=First and second applicant name must be different");
    }
}
else
{
    header("location:index.php?qn1=Please use another Team Name.");
}
ob_end_flush();
?>