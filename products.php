<?php
session_start();
$link= mysqli_connect("localhost","root","","Ecomm2");

if(!$link){
    echo "Error connecting to database";
}
$category=$_POST['category'];
$brandname=$_POST['brandname'];
$price=$_POST['price'];
$description=$_POST['description'];
$sellerid=$_SESSION['sellerid'];
$imagename=$_FILES['file'];
$fileTempName=$imagename['tmp_name'];
$imgname=$imagename['name'];




$fileDestination="gallery/".$imagename['name'];

mysqli_query($link, "INSERT INTO Product (category,brandname,price,sellerid,imagename,description) VALUES ('".$category."','".$brandname."','".$price."','".$sellerid."','".$imgname."','".$description."')") or die(mysqli_error($link));

move_uploaded_file($fileTempName,$fileDestination);

header("location:productsimage.php");

?>