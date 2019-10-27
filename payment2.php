<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Page 2</title>
    <link rel="stylesheet" href="paymentstyle.css">
</head>
<body>

<h1 style="text-align:center">Payment Page 2</h1>

<div class="form">
<form onsubmit="return proceed()" method="POST" action="finalpage.php">

<div class="formdiv">
    <h3>Payment Details</h3>
    <br>

    <label for="cardtype">Card Type</label>
    <br>
    <select id="selectbox">
        <option value="Visa">Visa</option>
        <option value="Discover">Discover</option>
        <option value="American Express">American Express</option>
        
   </select>
   <br><br>
    
    <label for="cardnumber">Card Number</label>
    <br>
    <input type="number" name="cardnumber" id="cardnumber">
    <br><br>
    <label for="date">Expiry Date</label>
    <br>
    <input type="date" name="date" id="date" required>
    <br><br>
    <label for="securitycode">Security code</label>
    <br>
    <input type="number" name="securitycode" id="securitycode">
    <br><br>
    <br>
    <input type="submit" name="submit" value="Continue" style="margin-left: 20px" >
    <br>
    <p id="notify"></p>
</div>
</form>
</div>


<script src="jquery.js" >
  </script>

<script type="text/javascript">



    function proceed(){
           
            var notify=document.getElementById("notify");
            
            if(cardnumber==""||securitycode==""){
        
            notify.innerHTML="Complete the form";
            notify.style.color="red";
            notify.style.fontSize="16px";

                return false;
            }
            
            return true;


}

</script>

</body>
</html>