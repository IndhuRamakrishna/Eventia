<?php
 include("sign.php");
 ?>
<html>
    <head>
       <style>
           body{ position: relative;top: 128px;right: -220px;}
          img{height:500px; width:500px; position: relative;top: -80px;right: -164px;}
          form{position: relative;top:-463px;right:-356px;font-weight: bold;}
          h1{font-family: cursive; font-size: 30px;}
          input[type="text"],
        input[type="password"],
        input[type="email"]
        { border: none; border-bottom: 2px solid black;background: transparent;outline: none;height: 40px;color:black;}
        label{font-size: 20px;}
        input[type="submit"]{border:none;outline: none;height: 40px;color: #262626;font-size: 16px;background:#efed40;cursor: pointer;border-radius: 20px;}
        input[type="submit"]:hover{background:white;color:red;}
       </style>
    </head>
    <body>
        <img src="images\flower.jpg" alt="">
        <form method="POST">
            <h1>Sign Up</h1>
            <label for="">Username</label>
            <br>
            <input type="text" name="username">
            <br>
            <br>
            <!-- <label for="">E-mail</label>
            <br>
            <input type="email" name="email">
            <br>
            <br> -->
            <label for="">Email-ID</label>
            <br>
            <input type="email" name="email">
            <br>
            <br>
            <label for="">Password</label>
            <br>
            <input type="password" name="password">
            <br>
            <br>
            
            <input type="submit" value="Create Account" name="submit"> 
            
        
            
        </form>
        
    </body>
</html>