<?php
session_start();
if(isset($_SESSION['name'])){
    unset($_SESSION['name']);
    header("location:./home/index.php");
}
else{
    header("location:./home/index.php");
}
?>