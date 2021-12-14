	<?php
         session_start();

         $connection=mysqli_connect('localhost','root','','signup_db');
    

         mysqli_select_db($connection,'signup_db');  


       
         if (!$connection) {
             die("Cannot connect");
         }

         if ($_SERVER["REQUEST_METHOD"]== "POST") {
             # code...
         $Firstname=$_POST['Firstname'];
         $Lastname=$_POST['Lastname'];
         $Email=$_POST['Email'];
         $role = $_POST['role'];
         $gender = $_POST['gender'];
     	 $Country=$_POST['Country'];
    	 $Password=$_POST['Password'];
         $cpassword = $_POST['confirmpassword'];
        
        //  if(!empty ($Firstname)&&!empty($Lastname)&&!empty($Email)&&!empty($Country)&&!empty($Password)){
    
         $signup="insert into signup(Firstname,Lastname,Email,role,gender,Country,Password) values('$Firstname','$Lastname','$Email','$role ','$gender','$Country','$Password')";
         mysqli_query($connection,$signup);

        

         die;
         }else{
             echo "Please enter valid info";
         }

         
	
         

var_dump($_POST);
      
             //code...
            
             
      
    
?>