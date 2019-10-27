<?php
$link=mysqli_connect("localhost","root","","Ecomm2");

if(!$link){
    echo "Not connected to database";
}
else{
 
    
    $partialStates=$_POST['partialState'];
    if($partialStates==""){
        return false;
    }
    $states=mysqli_query($link,"SELECT pid  FROM Product WHERE description LIKE '%$partialStates%'") or die (mysqli_error($link));
    //$states1=mysqli_query($link,"SELECT brandname FROM Products WHERE category LIKE '$partialStates%'") or die (mysqli_error($link));
    
    while($state=mysqli_fetch_array($states)){
        $brandname=mysqli_query($link,"SELECT brandname FROM Product WHERE pid=".$state['pid']."") or die (mysqli_error($link));
        $brand=mysqli_fetch_array($brandname);
        $price=mysqli_query($link,"SELECT price FROM Product WHERE pid=".$state['pid']."") or die (mysqli_error($link));
        $p=mysqli_fetch_array($price);
        $category=mysqli_query($link,"SELECT category FROM Product WHERE pid=".$state['pid']."") or die (mysqli_error($link));
        $c=mysqli_fetch_array($category);

        echo "<a href=productspage.php?quantity=".$state['pid']."><div  style='background-color:#cccccc;border:1px solid black'>".$brand['brandname']." ".$c['category']." $ ".$p['price']."</div><a>";

    }







}


?>