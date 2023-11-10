<?php
 session_start();
 $error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
$username=$_SESSION['username'];
 $event="Party";
 $design="Silver Ball";
 $price="15,000";
 $city=$_POST['city'];
 $area=$_POST['area'];
 $location=$_POST['location'];
 $date=$_POST['datev'];
 $time=$_POST['timev'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = new mysqli('localhost', 'root', '','eventia');
 //sql query to fetch information of registerd user and finds user match.
 $query = "INSERT INTO book(username,event,design,price) VALUES ('$username','$event','$design','$price')";
 if($conn->query($query)){
   echo "!";
 }
     
     $quer = mysqli_query($conn, "SELECT * FROM venue WHERE date = '$date'");
     
     $rows = mysqli_num_rows($quer);
     if($rows == 1) {
         $quer=mysqli_query($conn,"DELETE FROM book WHERE username='$username'");
          $error= "Sorry! we are not available on that day";
        
     }
     else{
 $sql = "INSERT INTO venue (username,city,area,location,date,time) VALUES ('$username','$city','$area','$location','$date','$time')";
     
     if($conn->query($sql)){
     header("Location: page1.php");// Redirecting to other page
     }
     else
     {
     echo "Booked";
     }
 }
     mysqli_close($conn); // Closing connection
     }
    
 
 
 
 
 

 
?>