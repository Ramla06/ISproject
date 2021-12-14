
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image:url("images/hope.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        /* background-position:center; */
        height: 200%;
      }
      .container{
          position: relative;
          right:300px;
      	  width: 300px;
	      text-align: center;
          color:white;
	      margin: 0 auto;
          background-color: rgba(0, 0, 0, 0.5);
          border-radius:10px;
	      margin-top: 100px;
        
      }
      input[type="Email"]{
        position: relative;
        left: 14px;
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
        /* .select{ 
        position: relative;
        left: 0px;
        width: 38%;
        height: 5px;
        padding: 15px;
        margin: 5px 0 15px 0;
        display: inline-block;
        border-radius: 10px;
        outline: none;
        background: whitesmoke;
        } */
        
      
      .Loginbtn {
        position: relative;
        left: 20px;
        background-color: rgb(64, 224, 104);
        color: white;
        padding: 10px 15px;
        margin: 8px;
        cursor: pointer;
        width: 50%;
        opacity: 0.9;
      }
      .close {
        position: relative;
        left: 20px;
        background-color: rgb(255, 17, 0);
        color: white;
        padding: 10px 15px;
        margin: 8px;
        cursor: pointer;
        width: 50%;
        opacity: 0.9;
      }

</style>
</head>
<body>
     <div class="container">
     <div class="Login"><h1>Login</h1></div>
      	<form action="validate.php" method="post" >

		   <label>Email</label>
           <input type="Email" placeholder="Email" name="Email" required>
		           
            <br/>
		    <label>password</label>
            <input type="password" placeholder="password" name="password" required >
		           
		<br/>
            <label>role</label>
						<select name="role" class="role">
							<!-- <option value="">Selete Role</option> -->
							<option value="patient">patient</option>
							<option value="specialist">specialist</option>
              <option value="user">user</option>
						</select>
            <br/>  
          <label><input type="checkbox" name="remember"> Remember me</label>
          <button class="Loginbtn">Login</button>
          <!-- <button type="button" class="close" data-dismiss="modal">Close</button> -->

		</form>
      </div>
</body>
</html>
