<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php?loginfirst');
}


?>
<?php

$username=$_SESSION['username'];
$uid=$_SESSION['userid'];

 echo '<h1 style="text-align:center">Welcome '.$username.'';

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="homestyle4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <br><br>

<div class="header">
    <ul id="list1">
<li>Categories</li>
<li><a href="home.php"> All</a>
</li>
<li><a href="clothes.php">Clothes</a></li>
<li><a href="electronics.php">Electronics</a></li>
<li><a href="shoes.php">Shoes</a></li>
</ul>
    <input id="searchbar" type="text" onkeyup="getStates(this.value)" name="searchbar" placeholder=" Search items ......" >
    
    <!--<button id="click" type="submit"><i class="fa fa-search"></i></button>  -->
<ul id="list2">


 <li>Account <div class="dropdown-content">
     
    <a href="bot2.php">Chat with bot</a>
    <br>
    <a href="orders.php">Your Order</a>
    <br>
    <a href="login.php">Sign out</a>
    <br>
  </div><li>
 
</ul>
</div>

<div class="banner" style="height:200px;width:500px;background-color:#; float:left"><?php

if(isset($_SESSION['ordered'])){
echo "<p style='background-color:#ADFF2F;color:white;
text-align:left'>Your &nbsp order &nbsp is &nbspsuccessful<p>";
}
?>
</div>
<div class="container">
<div class="item1" id="results" style="width:1400px; margin:auto;margin-left:870px;"></div>
<div class="banner"></div>
<br><br>
<div  id="outer" style="height:2000; width:100%px;color:red">
       <br>
</div>
</div>
</body>
</html>

<script  src="jquery.js"></script>

<script>
  
function  getStates(value){
   $.post("searchbar.php",{partialState:value},function(data){
         $("#results").html(data);
    });}
     

window.onload = function(){
  
 
<?php
   $link=mysqli_connect("localhost","root","","Ecomm2");
   $info=mysqli_query($link,"SELECT * FROM Product ");
   $id=array();
   $category=array();
   $brandname=array();
   $price=array();
   $seller=array();
   $index=0;
   $rowNum=mysqli_num_rows($info);
   while($row=mysqli_fetch_assoc($info)){

   $id[$index]=$row['pid'];
   $category[$index]=$row['category'];
   $brandname[$index]=$row['brandname'];
   $price[$index]=$row['price'];
   $imagename[$index]=$row['imagename'];
  
  

   $index++;

   }
?>
 var numOfRows="<?php echo $rowNum; ?>";
 var pid=<?php echo json_encode($id); ?>;
 var category=<?php echo json_encode($category); ?>;
 var brandname=<?php echo json_encode($brandname); ?>;
 var price=<?php echo json_encode($price); ?>;
 var imagename=<?php echo json_encode($imagename); ?>;


   for(var i=0;i<numOfRows;i++){
      var id=pid[i];
      var cat=category[i];
      var brand=brandname[i];
      var p=price[i];
      var imageName="gallery/"+imagename[i];

var div = document.createElement("div");
div.setAttribute("id","div1");

div.style.width = "21%";
div.style.height = "700px";
div.style.background = "#cccccc";
div.style.border="5px solid coral ";

div.style.color = "white";
div.style.margin="50px";
//div.style.margin-top="10px";
div.style.display="inline-block";

var elem = document.createElement("img");
elem.setAttribute("src",imageName );
elem.setAttribute("height", "500px");
elem.setAttribute("width", "96%");
elem.setAttribute("alt", cat);
div.appendChild(elem);
var p1=document.createElement("p");
p1.innerHTML=cat;
div.append(p1);
var p2=document.createElement("p");
p2.innerHTML=brand;
div.append(p2);
var p3=document.createElement("p3");
p3.innerHTML="$ "+p;
div.append(p3);
var aTag = document.createElement('a');
var link="productspage.php?quantity="+id;
aTag.setAttribute('href',link);
//aTag.innerText = "link text";
aTag.appendChild(div);


document.getElementById("outer").appendChild(aTag);
  }};



  
</script>
 

 <?php

 unset($_SESSION['ordered']);

?>