<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php?loginfirst');
}

?>
<?php

$username=$_SESSION['username'];
$uid=$_SESSION['userid'];

 echo '<h1 style="text-align:center">Welcome  ';
 echo $username." userid = ".$uid;

 

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
<li><a href="#">Movies</a></li>
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
    <a href="productspage.php" class="fill-div">
   <?php
$link=mysqli_connect("localhost","root","","Ecomm");
  if(!$link){
   
  }
  else{
      $info=mysqli_query($link,"SELECT * FROM Products WHERE pid=1");

     $array=mysqli_fetch_array($info);
     $productid=$array['pid'];
     $_SESSION['pid']=$productid;

     echo '<img src="gallery/mac.jpg" height="550"> 
     <p style="text-align:center">'.$array['brandname'].'</p>
     <p style="text-align:center">'."$ ".$array['price'].'</p>';
     

  }
?>
</a>
</div>


<div class="producttwo">

</div>
<div class="productthree">

</div>
<div class="productfour">

</div>

</div>

<br><br><br><br>

<div class="secondrow">
    <div class="productfive">

</div>
<div class="productsix">

</div>
<div class="productseven">

</div>
<div class="producteight">

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