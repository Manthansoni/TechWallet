<?php
session_start();
    
$conn=mysqli_connect("localhost","root","");
if(!$conn){
    die(mysqli_connect_error());
}
else{
    echo "success connection <br>";
}

$db=mysqli_select_db($conn,"website");
if(!$db){
    die(mysqli_connect_error());
}
else{
    echo "success select db <br>";
}

$a=$_POST['name'];
$b=$_POST['phone'];
$c=$_POST['email'];
$d=$_POST['password'];
if(isset($_POST['edit'])){

$upd="UPDATE users SET username='$a',mobilenumber='$b',emailid='$c',pass='$d' WHERE emailid='$c'";  
    $r=mysqli_query($conn,$upd);
    if(!$r){
        die("cannot Update");
    }
    else{
        echo "Updated successfully";
        header("location:profile.php");
     
    }

}