<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Page</title>
    <link rel="stylesheet" href="productpage1.css">
</head>
<body>

<?php

 $quantity=$_GET['quantity'];
 //echo $quantity;
 $_SESSION['pid1']=$quantity;
 $pid=$quantity;
 $link=mysqli_connect("localhost","root","","Ecomm2");
 $info=mysqli_query($link,"SELECT * FROM Product WHERE pid=$pid");
 $datas=mysqli_fetch_array($info);
 //echo $datas['brandname'];

 

?>
<br><br><br><br>
<h1 style="text-align:center">Products Page<h1>
<br><br><br>
<div class="productdiv">

<div class="imgdiv">
<?php
$imagename="gallery/".$datas['imagename'];

echo '<img src='.$imagename.' height="550"> '
?>
<div style="height:600px;width:600px;background-color:#;float:right;margin-right:1200px">
<?php
echo '<p style="text-align:center; margin-top:120px"> Price : $'.$datas['price'].'</p>
 <p  style="text-align:center">'.$datas['category'].'</p>
 <p style="text-align:center">Brandname : '.$datas['brandname'].'</p>
 ';
?>
<br><br>
<a href="shippingandpayment.php" style="text-decoration:none">
<div style="margin-left:200px;height:75px;width:200px;background-color:blue">
<p style="text-align:center;padding-top:20px;color:white;text-decoration:none">Buy</p></div>
</div>
</a>
</div>
    
</body>
</html>
<?php



?>