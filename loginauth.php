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

    if(isset($_POST['submit'])){
        
        $a=$_POST['email'];
        $b=$_POST['password'];
    
        $n="SELECT username FROM users WHERE emailid='$a'";
        $na=mysqli_query($conn,$n);
        if(!$na){
            die(mysql_error());
        }
        else{
            echo "success qry1<br>";
        }
        $numb=mysqli_fetch_row($na);
        
        $qry="SELECT pass FROM users WHERE emailid='$a'";
        $r=mysqli_query($conn,$qry);
        if(!$r){
            die(mysql_error());
        }
        else{
            echo "success qry2<br>";
        }
        
        $fet=mysqli_fetch_row($r);
              
        if($b<>$fet[0]){
            $wr="Please enter correct PASSWORD";
            $_SESSION['wrongpass']=$wr;
            echo $_SESSION['wrongpass'];
            header("location:./login/index.php");
        }
        elseif($b==$fet[0]){
            $_SESSION['name']=$numb[0];
            echo "hey".$_SESSION['name'];
            header("location:./home/index.php");
        }
        
    }
    elseif(isset($_POST['register'])){
        
        $a=$_POST['name'];
        $b=$_POST['phone'];
        $c=$_POST['email'];
        $d=$_POST['password'];
        $e=$_POST['password-confirm'];

        if($d==$e){
            $qry="INSERT INTO users VALUES('','$a','$b','$c','$d')";
            $r=mysqli_query($conn,$qry);
            if(!$r){
                die(mysqli_error($conn));
            }
            else{
                echo "success insert<br>";
            }

            $n="SELECT username FROM users WHERE emailid='$c'";
            $na=mysqli_query($conn,$n);
            if(!$na){
                die(mysql_error());
            }
            else{
                echo "success qry1<br>";
            }
            
            $fet=mysqli_fetch_row($na);
            
            $_SESSION['name']=$fet[0];
            header("location:./home/index.php");
            
        }
  
    }
        
?>