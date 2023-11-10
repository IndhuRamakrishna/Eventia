<?php
session_start();

?>
<html>
<head>
    <style>
        @font-face{
        font-family:tan;
        src:url(satisfy-regular.ttf);
    }
    h1{
        text-align:center;
        font-family:cursive;
        position:relative;
        top:50px;
    }
    div{
        font-family:cursive;
        font-size:30px;
        text-align:center;
        border:1px solid transparent;
        height:300px;
        width:300px;
        border-radius:25px;
        position:relative;
        right: -471px;
        top: 56px;
        background:linear-gradient(to top right,blue,white);
        
    }
    input[type="submit"]{
        border:1px solid black;
            background-color: white;
            height: 75px;
            width: 200px;
            position: relative;
            top:40px;
            right:-521px;
            font-size: 25px;
            font-family: cursive;
            cursor:pointer;
            border-radius: 25px;
    }
    a{
        font-size:20px;
        position:relative;
        top:-460px;
        color:black;
    }
    </style>
</head>
<body>
    <h1>Your Booking Details</h1>
    
    <div>
    <?php
     $conn=new mysqli("localhost","root","","eventia");
     $username=$_SESSION['username'];
     if(mysqli_connect_error()){
         echo "Connection Failed!";
     }
     else{
         $sql="SELECT * FROM book WHERE username='$username'";
         $result=$conn->query($sql);
         if($result->num_rows>0){
             
             while($row=$result->fetch_assoc()){
                 echo "</br>";
                echo "Event : ".$row["event"]."</br></br>" ;
            echo "Design : ".$row["design"]."</br></br>" ;
               echo "Price : ".$row["price"];
             }
             
         }
         else{
            echo "</br>";
            echo "</br>";
            echo "</br>";
             echo "No designs booked";
         }
         $conn->close();
     }
    ?>
    
    </div>
    <form action="delete.php" method="post"><input type="submit" value="cancel booking" name="submit"></form>
    
    
</body>
<a href="page1.php"><b><-back</b></a>

</html>