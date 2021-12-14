<?php
session_start();
var_dump($_POST);
      

$connection=mysqli_connect('localhost','root','','signup_db');
//$connection=mysqli_connect('localhost','root','write your password here')
if(!$connection)
{
  echo "Failed to connect";
}
      

$Email=$_POST['Email'];
$password=$_POST['password'];
$role=$_POST['role'];

$select="select * from signup where Email='$Email' && password='$password'&& role='$role'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
// if($num==1)
// if (mysqli_num_rows($res) == 1) {

    if ($role == "patient") {

        $_SESSION['patient'] = $Email;
        header("Location: patient.php"); 
    }else if($role == "specialist"){
     $_SESSION['specialist'] = $Email;
     header("Location: specialist.php");
    }
    else if($role == "user"){
        $_SESSION['user'] = $Email;
        header("Location: user.php");
       }
   $output .= "you have logged-In";
// else{
//   $output .= "Failed to login";
// }
// {
//   header('location:Hero.php');
// }
// else
{
    echo "Please enter valid info";
}
?>
      