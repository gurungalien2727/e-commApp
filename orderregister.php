<?php
session_start();


$_SESSION['zipcode']=$_POST['zipcode'];
$_SESSION['city']=$_POST['city'];
$_SESSION['state']=$_POST['state'];
$_SESSION['streetaddress']=$_POST['streetaddress'];
$_SESSION['cardnumber']=$_POST['cardnumber'];
$_SESSION['securitycode']=$_POST['securitycode'];
$_SESSION['cardtype']=$_POST['cardtype'];
$_SESSION['date']=$_POST['date'];

//echo $_SESSION['zipcode'];
header("location:finalpage.php");

?>