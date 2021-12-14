<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MentAfrica</title>
    <style>
      body,
      html{
        height: 80%;
        margin: 100;
        font-family: Helvetica, sans-serif;
      }
      .image {
        height: 200%;
      
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

      }
      .one {
        background-image: url("images/Mental1.jpg")
      }
      .two {
        background-image: url("images/MT.jpg")
      }
      .three {
        background-image: url("images/mental2.jpg")
      }
      .four {
        background-image: url("images/MA.jpg")
      }
      .content {
        
       background-color: rgb(0,0,0); /* Fallback color */
       background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
       color: White;
       font-weight: bold;
       font-size: 50px;
       border: 10px solid #f1f1f1;
       position: fixed; /* Stay fixed */
       top: 50%;
       left: 50%;
       transform: translate(-50%, -50%);
       z-index: 2;
       width: 800px;
       padding: 30px;
       text-align: center;
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
      a.active,a:hover{
        background:#1b9bff;
        transition:.5s;
      }
      .navitem:first-child {
        margin-right: auto;
        margin-left: 2rem;
      }
      .Logo img{
      width: 150px; 
      height: 60px;
      padding-left:30px;
      }

      .registerbtn {
        background-color: rgb(12, 16, 226);
        color: white;
        padding: 10px 15px;
        margin: 8px;
        cursor: pointer;
        width: 15%;
        opacity: 0.9;
      }
      .Loginbtn {
        position: relative;
        background-color: rgb(64, 224, 104);
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
        <div class="Logo">
         <img src="images/Logo.jpg">
         </div>
          <a href="#"></a>
        </li>
        <li class="navitem">
          <a clas="active" href="#">About</a>
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
    <div class="image one"></div>
    <div class="image two"></div>
    <div class="image three"></div>
    <div class="image four"></div>
    <div class="content">MENTAFRICA
      <br/>
      <p>Got your back</p>
      <br/>
    <a href="SignUp.php">
      <button class="registerbtn">Sign Up</button>
    </a>
    <a href="Login.php">
      <button class="Loginbtn">Login</button>
    </a> 

    </div>
    

</html>
