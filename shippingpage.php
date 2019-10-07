

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Page</title>
    <link rel="stylesheet" href="paymentstyle.css">
</head>
<body>

<h1 style="text-align:center">Payment Page1</h1>

<div class="form">
<form onsubmit="return proceed()" method="POST" action="payment2.php">

<div class="formdiv">
    <h3>Shipping Address</h3>
    <br>

    <label for="zipcode">Zipcode</label>
    <br>
    <input type="number" name="zipcode" id="zipcode">
    <br><br>
    <label for="city">City</label>
    <br>
    <input type="text" name="city" id="city">
    <br><br>
    <label for="state">State</label>
    <br>
    <input type="text" name="state" id="state">
    <br><br>
    <label for="streetaddress">Street Address</label>
    <br>
    <input type="text" name="streetaddress" id="streetaddress">
    <br><br>
    <br>
    <input type="submit" name="submit" value="Continue" style="margin-left: 20px" >
    <br>
    <p id="notify"></p>
</div>
</form>
</div>




<script type="text/javascript">



    function proceed(){
            var zipcode=document.getElementById('zipcode').value;
            var city=document.getElementById('city').value;
            var state=document.getElementById('state').value;
            var streetaddress=document.getElementById('streetaddress').value;
 
            
            var notify=document.getElementById("notify");

            if(zipcode==""||city==""||state==""||streetaddress==""){
        
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