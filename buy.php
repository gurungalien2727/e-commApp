<?php
 
 session_start();

 $link= mysqli_connect("localhost","root","","Ecomm2");

if(!$link){
    echo "Error connecting to database";
}
$zipcode=$_SESSION['zipcode'];
$city=$_SESSION['city'];
$state=$_SESSION['state'];
$streetaddress=$_SESSION['streetaddress'];
$cardnumber=$_SESSION['cardnumber'];
$securitycode=$_SESSION['securitycode'];
$cardtype=$_SESSION['cardtype'];
$date=$_SESSION['date'];
$cid=$_SESSION['userid'];
 $pid=$_SESSION['pid1'];
//echo $pid;


 mysqli_query($link,"INSERT INTO Orderdetails (zipcode,city,state,streetaddress,cardtype,cardnumber,expirydate,securitycode,buyerid,productid) VALUES ('".$zipcode."','".$city."','".$state."','".$streetaddress."','".$cardtype."','".$cardnumber."','".$expirydate."','".$securitycode."','".$cid."','".$pid."')") or die(mysqli_error($link));
 $_SESSION['ordered']=true;

header("location:home.php?order=sucessful");

?>