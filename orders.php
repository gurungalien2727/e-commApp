<?php

session_start();
   
   $cid=$_SESSION['userid'];
   $link=mysqli_connect("localhost","root","","Ecomm2");
   $info=mysqli_query($link,"SELECT productid FROM Orderdetails where buyerid='".$cid."' ")or die(mysqli_error($link)) ;
   $pid=array();
   $category=array();
   $brandname=array();
   $price=array();
   $sid=array();
   $index=0;
   $rowNum=mysqli_num_rows($info);
   while($row=mysqli_fetch_assoc($info)){

   $pid[$index]=$row['productid'];
   $index++;

   }

   $count=0;
   while($count<$index){
    $temp=$pid[$count];
    $info=mysqli_query($link,"SELECT category,brandname,price,sellerid FROM Product where pid='".$temp."' ") or die(mysqli_error($link));

while($row=mysqli_fetch_assoc($info)){

   $category[$count]=$row['category'];
   $brandname[$count]=$row['brandname'];
   $price[$count]=$row['price'];
   $sid[$count]=$row['sellerid'];
   }

     $count++;
   }
  
  $index=0;
  $sname=array();

  while($index<$count){
     $info=mysqli_query($link,"SELECT firstname FROM Seller where sid='".$sid[$index]."' ") or die(mysqli_error($link));
     
   while($row=mysqli_fetch_assoc($info)){

   $sname[$index]=$row['firstname'];
   
   }

     $index++;
  }




?>

<!DOCTYPE html>
<html lang="en">

<style>

table{
    font-family:arial,sans-serif;
    border-collapse:collapse;
    width:80%;
}

td,th{
    border:1px solid #cccccc;
    padding:20px;
}

tr:nth-child(even){

   background-color:#cccccc;
}
</style>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Orders</title>
</head>
<body>
  <br><br><br><br><br>
    <h1 style="text-align:center">Your Orders</h2>
   <br><br><br>
   <table style="margin:auto; font-size:30px ">
   <thead> <tr>
      <th>S.N</th>
      <th>Category</th>
      <th>Brandname</th>
      <th>Product Price</th>
      <th>Sold By</th>
   <tr>
<thead>

<tbody id="tableData"></tbody>


   </table>

</body>
</html>

<script  src="jquery.js"></script>

<script type="text/javascript">

window.onload=function(){

   
var numOfRows="<?php echo $count; ?>";
 var category=<?php echo json_encode($category); ?>;
 var brandname=<?php echo json_encode($brandname); ?>;
 var price=<?php echo json_encode($price); ?>;
 var sname=<?php echo json_encode($sname); ?>;


 
var tableBody=document.getElementById('tableData');
var dataHTML="";
for(var i=0;i<numOfRows;i++){
  
 dataHTML+='<tr><td>'+(i+1)+'<td>'+category[i]+'<td>'+brandname[i]+'<td> $ '+price[i]+
 '<td>'+sname[i]+'</tr>';
}
//document.write("12233444555");
tableBody.innerHTML=dataHTML;


}

</script>















