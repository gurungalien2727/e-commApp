<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php?loginfirst');
}

?>
<?php

$username=$_SESSION['username'];
$uid=$_SESSION['userid'];

 echo '<h1 style="text-align:center">Welcome to E-Comm Website';

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="homestyle4.css">
</head>
<body>
    <br><br>

<div class="header">
    <ul id="list1">
<li>Categories</li>
<li><a href="home.php"> All</a></li>
<li><a href="#">Clothes</a></li>
<li><a href="#">Electronics</a></li>
<li><a href="#">Shoes</a></li>
</ul>
    <input id="searchbar" type="text" name="searchbar" placeholder=" Search items ......" >
<ul id="list2">
 <li>Account <div class="dropdown-content">
     
    <a href="#">Your Account</a>
    <br><br>
    <a href="#">Your Order</a>
    <br><br>
    <a href="login.php">Sign out</a>
    <br><br>
  </div><li>
 <li><a href="#">Help</a>
</ul>
</div>
<br><br><br><br><br>

<div class="firstrow">

<div class="productone" >
    <a href="productspage.php?quantity=1" class="fill-div">
   <?php
$link=mysqli_connect("localhost","root","","Ecomm");
  if(!$link){
   
  }
  else{
      $info=mysqli_query($link,"SELECT * FROM Products WHERE pid=1");

     $array=mysqli_fetch_array($info);
     $productid=$array['pid'];
     $_SESSION['pid1']=$productid;
     $imagename=$array['imagename'];

     echo '<img src="gallery/mac.jpg" height="550"> 
     <p style="text-align:center">'.$array['brandname'].'</p>
     <p style="text-align:center">'."$ ".$array['price'].'</p>';
     

  }
?>
</a>
</div>


<div class="producttwo">
<a href="productspage.php?quantity=14" class="fill-div">
   <?php
$link=mysqli_connect("localhost","root","","Ecomm");
  if(!$link){
   
  }
  else{
      $info=mysqli_query($link,"SELECT * FROM Products WHERE pid=14");

     $array=mysqli_fetch_array($info);
     $productid=$array['pid'];
     $_SESSION['pid2']=$productid;
     $imagename=$array['imagename'];

     echo '<img src="gallery/nike2.png" height="550"> 
     <p style="text-align:center">'.$array['brandname'].'</p>
     <p style="text-align:center">'."$ ".$array['price'].'</p>';
     

  }
?>
</a>

</div>

<div class="productthree">
    <a href="productspage.php?quantity=15" class="fill-div">
   <?php
$link=mysqli_connect("localhost","root","","Ecomm");
  if(!$link){
   
  }
  else{
      $info=mysqli_query($link,"SELECT * FROM Products WHERE pid=15");

     $array=mysqli_fetch_array($info);
     $productid=$array['pid'];
     $_SESSION['pid3']=$productid;
     $imagename=$array['imagename'];

     echo '<img src="gallery/levis.png" height="550"> 
     <p style="text-align:center">'.$array['brandname'].'</p>
     <p style="text-align:center">'."$ ".$array['price'].'</p>';
     
  }
?>
</a>

</div>
<div class="productfour">
  
<a href="productspage.php?quantity=18" class="fill-div">
   <?php
$link=mysqli_connect("localhost","root","","Ecomm");
  if(!$link){
   
  }
  else{
      $info=mysqli_query($link,"SELECT * FROM Products WHERE pid=18");

     $array=mysqli_fetch_array($info);
     $productid=$array['pid'];
     $_SESSION['pid4']=$productid;
     $imagename=$array['imagename'];

     echo '<img src="gallery/windows.jpg" height="550"> 
     <p style="text-align:center">'.$array['brandname'].'</p>
     <p style="text-align:center">'."$ ".$array['price'].'</p>';
     
  }
?>
</a>




</div>

</div>

<br><br><br><br>

<div class="secondrow">
    <div class="productfive">

  
<a href="productspage.php?quantity=19" class="fill-div">
   <?php
$link=mysqli_connect("localhost","root","","Ecomm");
  if(!$link){
   
  }
  else{
      $info=mysqli_query($link,"SELECT * FROM Products WHERE pid=19");

     $array=mysqli_fetch_array($info);
     $productid=$array['pid'];
     $_SESSION['pid5']=$productid;
     $imagename=$array['imagename'];

     echo '<img src="gallery/nike.jpeg" height="550"> 
     <p style="text-align:center">'.$array['brandname'].'</p>
     <p style="text-align:center">'."$ ".$array['price'].'</p>';
     
  }
?>
</a>
</div>
<div class="productsix">

  
<a href="productspage.php?quantity=20" class="fill-div">
   <?php
$link=mysqli_connect("localhost","root","","Ecomm");
  if(!$link){
   
  }
  else{
      $info=mysqli_query($link,"SELECT * FROM Products WHERE pid=20");

     $array=mysqli_fetch_array($info);
     $productid=$array['pid'];
     $_SESSION['pid6']=$productid;
     $imagename=$array['imagename'];

     echo '<img src="gallery/nautica.jpeg" height="550"> 
     <p style="text-align:center">'.$array['brandname'].'</p>
     <p style="text-align:center">'."$ ".$array['price'].'</p>';
     
  }
?>
</a>
</div>
<div class="productseven">

<a href="productspage.php?quantity=21" class="fill-div">
   <?php
$link=mysqli_connect("localhost","root","","Ecomm");
  if(!$link){
   
  }
  else{
      $info=mysqli_query($link,"SELECT * FROM Products WHERE pid=21");

     $array=mysqli_fetch_array($info);
     $productid=$array['pid'];
     $_SESSION['pid7']=$productid;
     $imagename=$array['imagename'];

     echo '<img src="gallery/hp1.jpeg" height="550"> 
     <p style="text-align:center">'.$array['brandname'].'</p>
     <p style="text-align:center">'."$ ".$array['price'].'</p>';
     
  }
?>
</a>
</div>
<div class="producteight">
<a href="productspage.php?quantity=23" class="fill-div">
   <?php
$link=mysqli_connect("localhost","root","","Ecomm");
  if(!$link){
   
  }
  else{
      $info=mysqli_query($link,"SELECT * FROM Products WHERE pid=23");

     $array=mysqli_fetch_array($info);
     $productid=$array['pid'];
     $_SESSION['pid8']=$productid;
     $imagename=$array['imagename'];

     echo '<img src="gallery/dell3.jpeg" height="550"> 
     <p style="text-align:center">'.$array['brandname'].'</p>
     <p style="text-align:center">'."$ ".$array['price'].'</p>';
     
  }
?>
</a>

</div>

</div>

<br><br><br>
<div class="pagenumbers">
   <ul>
       <li><a href="home.php">1</a></li>
       <li><a href="#">2</a</li>
       <li><a href="#">3</a</li>
       <li><a href="#">4</a</li>
   </ul>
</div>

    
</body>
</html>