<?php
session_start();
if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
    echo "Username or Password should not be empty";
    }
    else
    {
    //Define $user and $pass
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    //Establishing Connection with server by passing server_name, user_id and pass as a patameter
    $conn = new mysqli('localhost', 'root', '','eventia');
    //Selecting Database
    
    //sql query to fetch information of registerd user and finds user match.
    $sql = "INSERT INTO customer(username,email,password) VALUES ('$username','$email','$password')";
    
   
    if($conn->query($sql)){
        $_SESSION['username'] = $username;
    header("Location: page1.php"); // Redirecting to other page
    }
    else
    {  
    echo "Username or Password is Invalid";
    }
    mysqli_close($conn); // Closing connection
    }
   }
?>