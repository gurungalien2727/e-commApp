<?php

$link= mysqli_connect("localhost","root","","Ecomm");

if(!$link){
    echo "Error connecting to database";
}
$category=$_POST['category'];
$brandname=$_POST['brandname'];
$price=$_POST['price'];
$imagename=$_FILES['file'];
$fileTempName=$imagename['tmp_name'];
$imgname=$imagename['name'];

echo $category." ".$brandname." ".$price;
echo "<br>";
echo "<br>";
echo $imgname;
echo "<br><br>";


$fileDestination="gallery/".$imagename['name'];

mysqli_query($link, "INSERT INTO Products (category,brandname,price,imagename) VALUES ('".$category."','".$brandname."','".$price."','".$imgname."')");

move_uploaded_file($fileTempName,$fileDestination);

?>