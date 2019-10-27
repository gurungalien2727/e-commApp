<script  src="jquery.js"></script>

<script>

alert(1);
window.onload = function(){
  

<?php
session_start();
   $cid=$_SESSION['userid'];
   $link=mysqli_connect("localhost","root","","Ecomm2");
   $info=mysqli_query($link,"SELECT productid FROM Orderdetails where buyerid='".$cid."' ");
   $pid=array();
   $category=array();
   $brandname=array();
   $price=array();
   $sid=array();
   $index=0;
   $rowNum=mysqli_num_rows($info);
   while($row=mysqli_fetch_assoc($info)){

   $pid[$index]=$row['pid'];
   $index++;

   }

   $count=0;
   while($count<$index){
    $temp=$pid[$count];
    $info=mysqli_query($link,"SELECT category,brandname,productprice,sellerid FROM Product where pid='".$temp."' ") or die(mysqli_error($link));

while($row=mysqli_fetch_assoc($info)){

   $category[$count]=$row['category'];
   $brandname[$count]=$row['brandname'];
   $price[$count]=$row['price'];
   $sid[$count]=$row['sellerid'];
   }

     $count++;
   }

?>
 var numOfRows="<?php echo $count; ?>";
 var category=<?php echo json_encode($category); ?>;
 var brandname=<?php echo json_encode($brandname); ?>;
 var price=<?php echo json_encode($price); ?>;
 var sid=<?php echo json_encode($sid); ?>;

//var tableBody=document.getElementById('tableData');

   for(var i=0;i<numOfRows;i++){
    
      var cat=category[i];
      var brand=brandname[i];
      var p=price[i];
      var s=sid[i];

     

   } 

//   tableBody.innerHTML = dataHtml;
  
</script>
 

alert(1);
window.onload = function(){
  

<?php
session_start();
   $cid=$_SESSION['userid'];
   $link=mysqli_connect("localhost","root","","Ecomm2");
   $info=mysqli_query($link,"SELECT productid FROM Orderdetails where buyerid='".$cid."' ");
   $pid=array();
   $category=array();
   $brandname=array();
   $price=array();
   $sid=array();
   $index=0;
   $rowNum=mysqli_num_rows($info);
   while($row=mysqli_fetch_assoc($info)){

   $pid[$index]=$row['pid'];
   $index++;

   }

   $count=0;
   while($count<$index){
    $temp=$pid[$count];
    $info=mysqli_query($link,"SELECT category,brandname,productprice,sellerid FROM Product where pid='".$temp."' ") or die(mysqli_error($link));

while($row=mysqli_fetch_assoc($info)){

   $category[$count]=$row['category'];
   $brandname[$count]=$row['brandname'];
   $price[$count]=$row['price'];
   $sid[$count]=$row['sellerid'];
   }

     $count++;
   }

?>
 var numOfRows="<?php echo $count; ?>";
 var category=<?php echo json_encode($category); ?>;
 var brandname=<?php echo json_encode($brandname); ?>;
 var price=<?php echo json_encode($price); ?>;
 var sid=<?php echo json_encode($sid); ?>;

//var tableBody=document.getElementById('tableData');

   for(var i=0;i<numOfRows;i++){
    
      var cat=category[i];
      var brand=brandname[i];
      var p=price[i];
      var s=sid[i];

     

   } 

//   tableBody.innerHTML = dataHtml;
  
</script>
 