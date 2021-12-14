<?php
session_start();
header('location:loginandregister.php');
$connection=mysqli_connect('localhost','root','','test');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'signup_db');

$Firstname=$_POST['Firstname'];
	$Lastname=$_POST['Lastname'];
	$Email=$_POST['Email'];
	 $Country=$_POST['Country'];
	$Password=$_POST['Password'];

$select="select * from signup-table where Email='$Email'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
   echo"User already exist";
}
else
{
  $reg="insert into register_table(name,email_id,password) values(Firstname,Lastname,Email,Country,password) values('$Fisrtname','$Lastname','$Email','$Country','$password')";
  mysqli_query($connection,$reg);
}
?>
