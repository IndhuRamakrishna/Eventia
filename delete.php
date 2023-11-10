<?php
session_start();
if(isset($_POST['submit'])){
    $username=$_SESSION['username'];
    $conn = new mysqli('localhost','root','','eventia');
    $query="DELETE FROM book WHERE username='$username'";
    $sql="DELETE FROM venue WHERE username='$username'";
    if($conn->query($query)&&$conn->query($sql)){
        header("Location: page1.php");
    }
    else{
        echo "failed";
    }
}
?> 