<!DOCTYPE html>

<html lang="en">
    <head>
      <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <title>
      Sign Up
    </title>
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-image:url("images/Mental.jpg"); 
        background-repeat: no-repeat;
        background-size: cover;
        background-position:center;
        height:300%;
        
      }
      * {
        box-sizing: 0;
      }
      .container{
      	width: 400px;
	      text-align: center;
	      margin: 0 auto;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius:50px;
	      margin-top:0px;
        color:white;
        
      }
     
      .navlist {
        background: black;
        box-shadow: none;
        margin: 0%;
        padding: 0;
        display: flex;
        justify-content: flex-end;
        align-items: center;
      }
      .navitem {
        list-style: none;
        margin-right: 2rem;
      }
      .navitem a {
        text-decoration: none;
        color: white;
      }
      .navitem:first-child {
        margin-right: auto;
        margin-left: 0rem;
      }
      .Logo img{
      width: 150px; 
      height: 60px;
      padding-left:30px;
      }
      .SignUp {
        position: relative;
        left: 100px;
        color: white;
        width: 100px;
        padding: 10px 15px;
        margin: 8px;
        border-radius: 100px;
        text-align:center;
        
      }
     
      input[type="text"]{
        position: relative;
        left: 2px;
        width: 30%;
        height: 5px;
        padding: 15px;
        margin: 5px 0 15px 0;
        display: inline-block;
        border-radius: 10px;
        outline: none;
        background: whitesmoke;
        
      }
     
      input[type="Email"]{
        position: relative;
        left: 20px;
        width: 30.2%;
        height: 5px;
        padding: 15px;
        margin: 5px 0 15px 0;
        display: inline-block;
        border-radius: 10px;
        outline: none;
        background: whitesmoke;
        
        
      }
      .role{
        position: relative;
        left: 25px;
        width: 38.2%;
        padding: 8px;
        margin: 5px 0 15px 0;
        display: inline-block;
        border-radius: 10px;
        outline: none;
        background: whitesmoke;

      }
      .gender{
        position: relative;
        left: 10px;
        width: 38.2%;
        padding: 8px;
        margin: 5px 0 15px 0;
        display: inline-block;
        border-radius: 10px;
        outline: none;
        background: whitesmoke;
      }
     
      input[type="African countries"] {
        position: relative;
        left: 13px;
        width: 30.2%;
        height: 5px;
        padding: 15px;
        margin: 5px 0 15px 0;
        display: inline-block;
        border-radius: 10px;
        outline: none;
        background: whitesmoke;
        
      }
      
      input[type="password"] {
        position: relative;
        left: 1px;
        width: 30%;
        height: 5px;
        padding: 15px;
        margin: 5px 0 15px 0;
        display: inline-block;
        border-radius: 10px;
        outline: none;
        background: whitesmoke;
        }
      
      input[type="text"]:focus,
      input[type="Email"]:focus,
      input[type="African countries"]:focus,
      input[type="password"]:focus {

        text-decoration: none;
   
        outline: none;

      }
      
      

      .registerbtn {
        position: relative;
        left: 10px;
        background-color: rgb(64, 224, 104);
        color: black;
        padding: 10px 15px;
        margin: 8px;
        cursor: pointer;
        width: 50%;
        opacity: 0.9;
      }
      .registerbtn:hover {
        opacity: 1;
      }
     
      .Loginbtn {
        position: relative;
        left: 450px;
        background-color: rgb(12, 16, 226);
        color: white;
        padding: 10px 15px;
        margin: 8px;
        cursor: pointer;
        width: 15%;
        opacity: 0.9;
      }
      .Already{
        width: 200px;
        margin: auto;
        padding: 10px 0px 10px 0px;
        text-align:left;
        color:white; 

      }

         
      
    </style>
  </head>
  <body>
    <nav>

      <ul class="navlist">
        <li class="navitem">
        <div class="Logo">
         <img src="images/Logo.jpg">
         </div>
        </li>
        <li class="navitem">
          <a href="#">About</a>
        </li> <li class="navitem">
          <a href="#">Awareness</a>
        </li> <li class="navitem">
          <a href="#">FAQs</a>
        </li> <li class="navitem">
          <a href="#">Contact</a>
        </li>
        <li class="navitem">
          <a href="#"></a>
        </li>

      </ul>
    </nav>
    <div class="container">
    <div class="SignUp"><h1>SignUp</h1></div>
        <form action="Co.php" method="post">
        <p>Please fill this form to create an account</p>
        <hr />
        <label>Firstname</label>
        <input type="text" placeholder="Firstname" name="Firstname"  required/>
        <br/>
        <label>Lastname</label>
        <input type="text" placeholder="Lastname" name="Lastname"required/>
        <br />
        <label>Email</label>
        <input type="Email" placeholder="Email" name="Email" required />
        <br />
        <label>role</label>
						<select name="role" class="role">
							<!-- <option value="">Selete Role</option> -->
							<option value="patient">patient</option>
							<option value="specialist">specialist</option>
              <option value="user">user</option>
						</select>
            <br/>

        <label>Gender</label>
						<select class="gender" name="gender">
							<!-- <option value="">Select Gender</option> -->
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
         <br/>
        <label>Country</label>
        <input type="African countries" placeholder="Africa"name="Country" required/>
        <br/>
        <label>Password</label>
        <input type="password" placeholder="Password" name="Password" required/>
        <br />
        <label>Confirm</label>
        <input type="password" name="confirmpassword" placeholder="Confirm Password" required>
        <br/>
          
        <p>
          By creating an account you agree to our
          <a href="#">Terms and Privacy</a>
        </p>
            
        <button class="registerbtn">Sign Up</button>
        
        <br/>
    
        
       
    
</div>
  </body>
</html>