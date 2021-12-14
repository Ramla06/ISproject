<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: url("");
        background-repeat: no-repeat;
        background-size: cover;
      }

      .navlist {
        background: white;
        box-shadow: none;
        margin: 0%;
        padding: 1rem 0;
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
        color: black;
      }
      .navitem:first-child {
        margin-right: auto;
        margin-left: 2rem;
      }

      
      .Logoutbtn {
        position: relative;
        left: 450px;
        background-color: rgb(12, 16, 225);
        color: white;
        padding: 10px 15px;
        margin: 8px;
        cursor: pointer;
        width: 15%;
        opacity: 0.9;
      }
      
    
    </style>
  </head>
  <body>
    <nav>
      <ul class="navlist">
        <li class="navitem">
          <a href="#">LOGO</a>
        </li>
        <li class="navitem">
          <a href="#">About</a>
        </li>
        <li class="navitem">
          <a href="#">Awareness</a>
        </li>
        <li class="navitem">
          <a href="#">FAQs</a>
        </li>
        <li class="navitem">
          <a href="#">Contact</a>
        </li>
        <li class="navitem">
          <a href="#"></a>
        </li>
      </ul>
    </nav>
    <h1>Admin</h1>

   

    <!-- <a href="SignUp.php"> -->
      <!-- <button class="registerbtn">Sign Up</button> -->
    <!-- </a> -->
    <a href="Logout.php">
      <button class="Logoutbtn">Logout</button>
    </a>

  
    
</html>
