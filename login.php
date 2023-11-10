<?php
 include("loginserv.php");?>

<html>
    <head>
       <style>
           body{
               position: relative;
               top: 151px;
               right: -195px;
           }
          
          img{
            height:500px;
            width:500px;
            position: relative;
            top: -80px;
            right: -164px;
	}
          form{
              position: relative;
              top:-455px;
              right:-343px;
              font-weight: bold;
            
              

          }
          h1{
              font-family: cursive;
              font-size: 30px;
          }
          input[type="text"],
        input[type="password"]
        {
            border: none;
            border-bottom: 2px solid black;
            background: transparent;
            outline: none;
            height: 40px;
            color:black;
            

        }
        label{
            font-size: 20px;
        }
    
        input[type="submit"]
        {
            border:none;
            outline: none;
            height: 40px;
            color: #262626;
            font-size: 16px;
            background:#efed40;
            cursor: pointer;
            border-radius: 20px;
        }
        input[type="submit"]:hover{
            background:white;
            color:red;
        }
        span{
            color:red;
            font-size:15px;
            position:relative;
            top:37px;
            right:80px;
        }
       </style>
    </head>
    <body>
        <img src="images\flower.jpg" alt="">
        <form action="" method="post">
            <h1>Log In</h1>
            <label for="">Username</label>
            <br>
            <input type="text" name="username">
            <br>
            <br>
            <label for="">Password</label>
            <br>
            <input type="password" name="password">
            
            <br>
            <br>
            <input type="submit" value="Log In" name="submit">
            <span><?php echo $error; ?></span>
            <span></span>
        
            
        </form>
        
    </body>
</html>