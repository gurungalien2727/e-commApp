<?php
 session_start();
 
if(!isset($_POST['submit'])){
header('location:login.php?error');
}

$email=$_POST['email'];
$password=$_POST['password'];

//Connecting to the Database with name Ecomm
$link=mysqli_connect("localhost","root","","Ecomm2");

if(!$link){
    echo "Not connected to database";
}


$checkEmail=mysqli_query($link,"SELECT * FROM Seller WHERE email='".$email."' ") ;
    if(mysqli_num_rows($checkEmail)==0){
       header('location:signinseller.php?signin=failed');
       $_SESSION['test']='Incorrect email';
    }

    else{
        echo "<br/><br/>";
        $info=mysqli_fetch_array($checkEmail);
        if($password==$info['password']){
            $firstname=$info['firstname'];
            $sid=$info['sid'];    
            $_SESSION['username']=$firstname;
            $_SESSION['sellerid']=$sid;
            
         header('location:productsimage.php?signin=successfull');
        
            
        }
        else{
        $_SESSION['test2']="Incorrect password";
        header('location:signinseller.php?signin=fail');
        }
    }


?>