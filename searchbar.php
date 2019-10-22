<?php
$link=mysqli_connect("localhost","root","","Ecomm");

if(!$link){
    echo "Not connected to database";
}
else{
 
    
    $partialStates=$_POST['partialState'];
    if($partialStates==""){
        return false;
    }
    $states=mysqli_query($link,"SELECT pid  FROM Products WHERE category LIKE '$partialStates%'") or die (mysqli_error($link));
    //$states1=mysqli_query($link,"SELECT brandname FROM Products WHERE category LIKE '$partialStates%'") or die (mysqli_error($link));
    
    while($state=mysqli_fetch_array($states)){
        $brandname=mysqli_query($link,"SELECT brandname  FROM Products WHERE pid=".$state['pid']."") or die (mysqli_error($link));
        $brand=mysqli_fetch_array($brandname);

        echo "<a href=productspage.php?quantity=".$state['pid']."><div  style='background-color:#cccccc;border:1px solid black'>".$brand['brandname']."</div><a>";

    }







}


?>