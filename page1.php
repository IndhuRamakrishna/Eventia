<?php
session_start();?>
<html>
    <head>  
        <style>
             @font-face{
        font-family:tan;
        src:url(satisfy-regular.ttf);
    }
            body{position: relative;top: -170px;background-color: rgb(255, 255, 255); }
            #div1{border: 1px solid rgba(218, 162, 32, 0.81);width: 110px;height: 200px;background-color:rgba(218, 162, 32, 0.81);border-top-left-radius: 60px;border-top-right-radius:60px;position: relative;top: 185px;right: -16px;}
            #ha{position: relative;top: -175px;right: -410px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;color: wheat;font-size: 40px;}
            li{list-style-type: none;font-size: 17px;}
            .a1{color:black;}
            ul{position: relative;left: -20px;}
            #a{position: relative;top:-4px;}
            #b{position: relative;top:15px;}
            #c{position: relative;top: 35px;}
           #h2a{text-decoration: underline;position: relative;right: 5px;}
            .a1:hover{color: gold;}
            .p1{color:black;position: relative;top: -378px;right: -1150px;font-size:20px;}
            .al{color:black;position: relative;top: 2px;right: -568px;font-size:20px;}
            #img1{height: 250px;width:1260px;}
            
                   .h2b{font-family:cursive;font-size:30px;position: relative;top: -170px;right: -500px; color: maroon;}
        .i1{width: 400px;height: 300px;position: relative;top: -509px;right: -19px;}
        .a2{color:rgb(0, 0, 0);text-decoration: none;position: relative;top: -840px;right: -17px;font-size: 40px;}
        .a2:hover{color: #330333;}
        .i2{
            height: 300px;
            width: 400px;
            position: relative;
            top: -898px;
            right: -462px;
        }
        .a3{
            color:rgb(255, 255, 255);
            text-decoration: none;
            position: relative;
            top: -1096px;
            right: -588px;
            font-size: 40px;
        }
        .a3:hover{
            color:#44052D;
        }
        .i3{
            height: 300px;
            width: 400px;
            position: relative;
            top: -941px;
            right: -17px;
            font-size: 40px;
        }
        .a4{
            color:white;
            text-decoration: none;
            position: relative;
            top: -1227px;
            right: -170px;
            font-size: 40px;
        }
        .a4:hover{
            color:whitesmoke;
        }
        .i4{
            height: 300px;
            width: 400px;
            position: relative;
            top: -1331px;
            right: -461px;
            font-size: 40px;
        }
        .a5{
            color:black;
            text-decoration: none;
            position: relative;
            top: -1416px;
            right: -560px;
            font-size: 40px;
        }
        .a5:hover{
            color:darkblue;
        }
        .div2{
            position: relative;
            top: 360px;
            right: -160px;
            border: 1px solid transparent;
            height:450px;
        }
        .php{
            position:relative;
            top:-145px;
            right:-495px;
            font-family:tan;
            font-size:40px;
            
        }

        .footer{border: 1px solid black;background-color: black;position: relative;top: 130px;right:-200px;width: 800px;height: 80px;border-radius: 50px;}
           .fh{color: white;font-family: cursive;padding: 20px;position: relative;top: -25px;}
           .fp1{color: white;position: relative;right: -483px;top: -109px;}
           .fp2{color: white;position: relative;right: -460px;top: -110px;}
        
        </style>
    </head>
    <body>
        
        
        <div id=div1>
            
                <ul>
                    <h2 id="h2a">Eventia</h2>
                    <li id=a><a class="a1" href="#">Home</a></li>
                    <li id=b><a class="a1" href="about1.html">About us</a></li>
                    <li id=c><a class="a1" href="contact1.html">Contact us</a></li>
                </ul>
                
        </div>
        <img id=img1 src="images\1.jpg" alt="">
        <h1 id=ha>Lets plan your party online</h1>
        <p class="p1"> <b> <a href="cart.php">Account</a> </b> </p>
        
        <p class="php"><b><?php echo "Welcome ".$_SESSION['username']." !"?></b></p>
        <h2 class="h2b">Select Event</h2>
            <div class="div2"> 
            <a href="reception.php"><img class="i1" src="images\changedreception.png" alt=""></a>
                <h1><a class="a2" href="reception.php">Reception</a></h1>
                <a href="birthday.php"><img class="i2" src="images\changedbirthday.jpg" alt=""></a>
                <h1><a class="a3" href="birthday.php">Birthday</a></h1>
                <a href="official.php"><img class="i3" src="images\changedparty.jpg" alt=""></a>
                <h1><a class="a4" href="official.php">Parties</a></h1>
                <a href="anniversary.php"><img class="i4" src="images\changedanniversary.jpg" alt=""></a>
                <h1><a class="a5" href="anniversary.php">Anniversary</a></h1>
            </div>
           
            <footer
            <div class="Footer">
                <h1 class="fh">Eventesia</h1>
                <p class="fp1">@2018 eventesia. All rights reserved.</p>
                <p class="fp2">Designed and developed by Advith & Amith</p>
            </div>></footer>
            <b> <a class="al" href="page.php">LogOut</a> </b>
           
    
       </body>
</html>