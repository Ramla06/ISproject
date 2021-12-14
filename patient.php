<!DOCTYPE html>
<html>
  <head>
    <title>Title of the document</title>
    <style>
      body,
      html {
        height: 80%;
        margin: 100;
        font-family: Helvetica, sans-serif;
      }
      .image {
        height: 200%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      } .one {
        background-image: url("images/MB.jpg")
      }
      .two {
        background-image: url("images/stigma.jpg")
      }
      .three {
        background-image: url("images/MT.jpg")
      }
      .four {
        background-image: url("images/MA.jpg")
      }
      
      .content {
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff0c2;
        font-weight: bold;
        font-size: 60px;
        border: 8px solid #000000;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 270px;
        padding: 50px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="image one"></div>
    <div class="image two"></div>
    <div class="image three"></div>
    <div class="image four"></div>
    
    
    <div class="content">patient</div>
  </body>
</html>