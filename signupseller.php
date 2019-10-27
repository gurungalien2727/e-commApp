
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup page</title>
    <link rel="stylesheet" href="signupstyle.css">
</head>

<body>

<div class="form">
<form onsubmit="return validate()" method="POST" action="registerseller.php"  >

<div class="formdiv">
    Already a Seller?
    <br/>
    <a href="signinseller.php" style="margin-left:60px;" >Sign in </a>
    <br><br><br>

    <label for="firstname">FirstName</label>
    <br>
    <input type="text" name="firstname" id="firstname">
    <br><br>
    <label for="lastname">LastName</label>
    <br>
    <input type="text" name="lastname" id="lastname">
    <br><br>
    <label for="email">Email</label>
    <br>
    <input type="text" name="email" id="email">
    <br><br>
    <label for="password">Password</label>
    <br>
    <input type="password" name="password" id="password">
    <br><br>
    <label for="confirmpassword">Confirm Password</label>
    <br>
    <input type="password" name=confirmpassword id="confirmpassword">
    <br><br><br>

    <input type="submit" name="submit" value="Sign up" style="margin-left: 20px" >
    <br>
    <p id="notify"></p>
</div>
</form>
</div>

<script type="text/javascript">
  
        function validate(){
    
            var firstname=document.getElementById('firstname').value;
            var lastname=document.getElementById('lastname').value;
            var email=document.getElementById('email').value;
            var password=document.getElementById('password').value;
            var confirmpassword=document.getElementById('confirmpassword').value;

            var notify=document.getElementById("notify");

            if(firstname==""||lastname==""||email==""||password==""||confirmpassword==""){
        
            notify.innerHTML="Complete the form";
            notify.style.color="red";
            notify.style.fontSize="16px";

                return false;
            }
            if(password!=confirmpassword){

                notify.innerHTML="Password do not match";
                notify.style.color="red";
                
                return false;

                
            }
            
            return true;
        }
  
  
  </script>



</body>
</html>

