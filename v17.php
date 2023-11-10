<?php
include "a3connect.php";

?>
<html>
    <head>
        <style>
             @font-face{
        font-family:tan;
        src:url(satisfy-regular.ttf);
    }
         label{
    font-size: 20px;
}
span{
    font-size:30px;
    position:relative;
    font-family:tan;
    right:-430px;
}
option{
    font-size: 18px;
}
#div2{
    border: 1px solid white;
    border-radius:50px;
    width: 500px;
    height: 600px;
    background: linear-gradient(to top left,#EBD255,#C58309);
    position: relative;
    top:-6px;
    right: -390px; 
}
form{
position: relative;
top: 46px;
right: -172px;
font-family:tan;
font-size:20px;
}
input[type="text"],
input[type="date"],
input[type="time"]
{
border: none;
border-bottom: 2px solid black;
background: transparent;
outline: none;
height: 40px;
color:black;


}
input[type="submit"]{
    height:50px;
    width:100px;
    border-radius:25px;
    background-color:yellow;
    font-size:20px;

}
h1{
    text-align:center;
    font-family:tan;
}


        
        </style>
    </head>
    <body>
         <span><?php echo $error;?></span>
        <h1><b>Enter Venue Details..!!</b></h1>
        <div id=div2>
            <form action="" method="post">
                    <label for=""> City :    </label>
                    <br>
                    <input type="text" name="city">
                    <br>
                    <br>
                    <label for="">Enter area :</label>
                    <br>
                    <input type="text" name="area">
                    <br>
                    <br>
                    <label for="">Enter venue location :</label>
                    <br>
                    <input type="text" name="location">
                    <br>
                    <br>
                    <label for="">Enter event date</label>
                    <br>
                    <input type="date" name="datev">
                    <br>
                    <br>
                    <label for="">Enter event time</label>
                    <br>
                    <input type="time" name="timev">
                     <br>
                     <br>
                     <input type="submit" value="submit" name="submit">
                    
                </form>
        
            
        </div>
    </body>
</html>
