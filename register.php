<?php

if(!isset($_POST['submit'])){
header('location:signup.php?error');
}

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];

#echo $firstname." ".$lastname." ".$email." ".$password;

$link=mysqli_connect("localhost","root","","Ecomm");

if(!$link){
    echo "Not connected to database";
}
else{
    echo "Connected Sucessfully";
    echo "<br>";
    mysqli_query($link,"INSERT INTO Users (firstname,lastname,email,password) VALUES ('".$firstname."','".$lastname."','".$email."','".$password."')") or die(mysqli_error($link));
       header('location:login.php?signup=sucessful');
}


?>