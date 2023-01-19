<?php
    $conn=mysqli_connect("localhost","root","");
    if(!$conn){
        die(mysqli_connect_error());
    }

    $db=mysqli_select_db($conn,"website");
    if(!$db){
        die(mysqli_connect_error());
    }
?>