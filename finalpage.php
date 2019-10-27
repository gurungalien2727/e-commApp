<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Details</title>
    <link rel="stylesheet" href="finalpage.css">
</head>
<body>

<?php
 
 $pid=$_SESSION['pid1'];
 //echo $pid;
 $link=mysqli_connect("localhost","root","","Ecomm2");
 $info=mysqli_query($link,"SELECT * FROM Product WHERE pid=$pid");
 $datas=mysqli_fetch_array($info);
 //echo $datas['brandname'];
?>
<br><br><br><br>
<h1 style="text-align:center">Order Details<h1>
<br><br><br>
<div class="productdiv">

<div class="imgdiv">
<?php
$imagename=$datas['imagename'];
echo '<img src="gallery/'.$imagename.'" height="550"> '
?>
<div style="height:600px;width:600px;background-color:#;float:right;margin-right:1200px">
<?php
$total=$datas['price']+($datas['price']*0.10);
echo '<p style="text-align:center; margin-top:120px;text-decoration:underline"> Order Summary</p>
      <p style="text-align:center;"> Items : $'.$datas['price'].'</p>
      <p  style="text-align:center">Tax : $'.$datas['price']*0.10.' 
      <hr> </p>
      <p  style="text-align:center">Order Total : $'.$total.' 
      <hr> </p>
 ';
?>
<br><br>
<div style="margin-left:200px;height:75px;width:500px;background-color:blue"  >

<a href="buy.php" style="text-decoration:none">
<p style="text-align:center;padding-top:20px;color:white">Place your order</p></div>
<a/>
</div>
</div>


   
<script>

</body>
</html>
