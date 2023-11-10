<html>
        <head>
            <style>
            @font-face{
                font-family:tan;
                src:url(satisfy-regular.ttf);
            }
               .head{
                   text-align:center;
                   color:black;
                   font-family:tan;
        
               }
               .img1{
                   position:relative;
                   top:10px;
                   right: -33px;
                   width:500px;
                   height:300px;
               }
               .img2{
                   position:relative;
                   top: -111px;
                   right: -31px;
                   width:500px;
                   height:300px;
               }
               .img3{
                   position:relative;
                   top: -223px;
                   right: -29px;
                   width:500px;
                   height:300px;
               }
               table{
           color:black;
           font-family:tan;
           border:1px solid transparent;
           height:400px;
           width:500px;
           font-size:30px;
           border-radius:25px;
           background:linear-gradient(lightblue,darkblue);
           position:relative;
           top: -548px;
           right: -357px;
       }
       th{
         border-bottom:2px solid purple;
       }
       td{
           text-align:center;
       }
       .hp{
           font-family:tan;
           text-align:center;
           color:black;
           position:relative;
           top:-573px;
           right:10px;
       }
               .img4{
                   position:relative;
                   top: -334px;
                   right: -26px;
                   width:500px;
                   height:300px;
               }
               .img5{
                   position:relative;
                   top: -447px;
                   right: -26px;
                   width:500px;
                   height:300px;
               }
               .name1{
                   color: goldenrod;
                   font-family: tan;
                   position: relative;
                   top: -233px;
                   right: -648px;
                   font-size: 40px;
               }
               .name2{
                color: goldenrod;
                   font-family: tan;
                   position: relative;
                   top: -359px;
                   right: -664px;
                   font-size: 40px;
               }
               .name3{
                color: goldenrod;
                   font-family: tan;
                   position: relative;
                   top: -448px;
                   right: -648px;
                   font-size: 40px;
               }
               .name4{
                color: goldenrod;
                   font-family: tan;
                   position: relative;
                   top: -566px;
                   right: -648px;
                   font-size: 40px;
               }
               .name5{
                color: goldenrod;
                   font-family: tan;
                   position: relative;
                   top: -712px;
                   right: -648px;
                   font-size: 40px;
               }
               .p1{
                   color: black;
                   position: relative;
                    top: -258px;
                   right: -716px;
                   font-size: 20px;
               }
               .p2{
                   color: black;
                   position: relative;
                   top: -381px;
                   right: -720px;
                   font-size: 20px;
               }
               .p3{
                   color: black;
                   position: relative;
                   top: -466px;
                   right: -722px;
                   font-size: 20px;
               }
               .p4{
                   color: black;
                   position: relative;
                   top: -585px;
                   right: -729px;
                   font-size: 20px;
               }
               .p5{
                   color: black;
                   position: relative;
                   top: -730px;
                   right: -736px;
                   font-size: 20px;
               }
               .div1{
                   position: relative;
                   right: -100px;
               }
               .footer{border: 1px solid black;background-color: black;position: relative;top: -500px;right:-200px;width: 800px;height: 80px;border-radius: 50px;}
                   .fh{color: white;font-family: cursive;padding: 20px;position: relative;top: -25px;}
                   .fp1{color: white;position: relative;right: -483px;top: -109px;}
                   .fp2{color: white;position: relative;right: -460px;top: -110px;}
            
            </style>
        </head>
        <body>
                <h1 class="head">Here are some amazing Party Designs..!!</h1>
                
            <div class="div1">
                    <a href="p1.php"><img class="img1" src="hall\changedskylight1.jpg" alt=""></a>
                    <h2 class="name1">Skylight</h2>
                    <p class="p1"><b> Price:Rs. 15,000</b></p>
                    <a href="p2.php"><img class="img2" src="hall\changedsilverball1.jpg" alt=""></a>
                    <h2 class="name2">Silver Ball</h2>
                    <p  class="p2"><b> Price:Rs. 10,000</b></p>
                    <a href="p3.php"><img class="img3" src="hall\o5.jpg" alt=""></a>
                    <h2 class="name3">NightLife</h2>
                    <p  class="p3"><b> Price:Rs. 5,000</b></p>
                    <a href="p4.php"><img class="img4" src="hall\changedcocktail.jpg" alt=""></a>
                    <h2 class="name4">Cocktail</h2>
                    <p  class="p4"><b> Price:Rs. 20,000</b></p>
                    <a href="p5.php"><img class="img5" src="hall\changedkaraoke.jpg" alt=""></a>
                    <h2 class="name5">Karaoke</h2>
                    <p  class="p5"><b> Price:Rs. 25,000</b></p>
            </div>
            <h1 class="hp">Select your favourite design!</h1>
    <?php
    $conn=new mysqli("localhost","root","","eventia");
    if(mysqli_connect_error()){
        echo "Connection Failed!";
    }
    else{
        $sql="SELECT * FROM party";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            echo "<table><tr><th>Design</th><th>Price</th></tr>";
            while($row=$result->fetch_assoc()){
                echo "<tr><td>".$row["design"]."</td><td>".$row["price"]."</td></tr>";
            }
            echo    "</table>";
        }
        else{
            echo "0 results";
        }
        $conn->close();
    }
    ?>
            <div class="Footer">
                <h1 class="fh">Eventesia</h1>
                <p class="fp1">@2018 eventesia. All rights reserved.</p>
                <p class="fp2">Designed and developed by Advith & Amith</p>
            </div>
        </body>
        
        </html>