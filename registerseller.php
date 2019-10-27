<?php

if(!isset($_POST['submit'])){
header('location:signupseller.php?error');
}

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];

#echo $firstname." ".$lastname." ".$email." ".$password;
//Connnecting to the Database with name Ecomm
$link=mysqli_connect("localhost","root","","Ecomm2");

if(!$link){
    echo "Not connected to database";
}
else{
    
    mysqli_query($link,"INSERT INTO Seller (firstname,lastname,email,password) VALUES ('".$firstname."','".$lastname."','".$email."','".$password."')") or die(mysqli_error($link));
       header('location:login.php?signup=successful');
}


?>