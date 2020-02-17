
<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Login page</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>

<body>

<div class="form">
<form onsubmit="return validate()" method="POST" action="verifyuser.php"  >

<div class="formdiv" style="font-size:18px">
   

    <h2 style="font-style:bold">e-comm app</h2>
    <br>
    
    <label for="email">Email</label>
    <br>
    <input type="text" name="email" id="email">
    <br><br>
    <label for="password">Password</label>
    <br>
    <input type="password" name="password" id="password">
    <br><br>
    
    <br>

    <input type="submit" name="submit" value="Sign in" style="margin-left: 20px" >

    <br><br>
  
    <span style="font-size:13px">New User</span>
    
    <a href="signup.php" style="margin-left:5px;">Sign up </a>
    <br>
    <span style="font-size:13px">New Seller</span>
    
    <a href="signupseller.php" style="margin-left:5px;">Sign up </a>
    <br><br>

    <span style="font-size:13px">As Seller</span>
    
    <a href="signinseller.php" style="margin-left:5px;">Sign in </a>
    <br><br>
    <?php
    
if(isset($_SESSION['test'])){
    echo ' <p id="notify"  style="font-size:16px;color:red">'.$_SESSION['test'].'</p>';

}
if(isset($_SESSION['test2'])){
   
     echo ' <p id="notify"  style="font-size:16px;color:red">'.$_SESSION['test2'].'</p>';

}

session_destroy();


?>
 
</div>
</form>
</div>

<script type="text/javascript">
  
        function validate(){
    
            var email=document.getElementById('email').value;
            var password=document.getElementById('password').value;
        
            var notify=document.getElementById("notify");

            if(email==""||password==""){
        
            notify.innerHTML="Enter your email and password";
            notify.style.color="red";
            notify.style.fontSize="16px";

                return false;
            }
            if(password!=confirmpassword){

                notify.innerHTML="Invalid email or password";
                notify.style.color="red";
                
                return false;

                
            }
            
            return true;
        }
  
  
  </script>



</body>
</html>

