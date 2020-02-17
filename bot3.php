<?php
include"bot.php";
  
$server_time=date("Y-m-d H:i:s");

if(isset($_POST['text'])){

$msg=$_POST["text"];

$query=mysqli_query($conn,"SELECT * FROM question WHERE question LIKE '%$msg%'") ;

$count = mysqli_num_rows($query);

    if($count=="0"){
      
        $data = "Sorry ! I did not understand what you said ";
        $query4=mysqli_query($conn,"insert into chats(user,chatbot,date)values('$msg','$data','$server_time')");
      
    }else{
        while($row = mysqli_fetch_array($query)){
              
                $data= $row['answer'];
              
                $query4=mysqli_query($conn,"insert into chats(user,chatbot,date)values('$msg','$data','$server_time')");
            }
        }
}  
?>