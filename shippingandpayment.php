

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

<h1 style="text-align:center">Payment Page</h1>

<div class="form">
<form onsubmit="return proceed()" method="POST" action="orderregister.php">

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

     <h3>Payment Details</h3>
    <br>

    <label for="cardtype">Card Type</label>
    <br>
    <select id="selectbox" name="cardtype">
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




<script type="text/javascript">



    function proceed(){
            var zipcode=document.getElementById('zipcode').value;
            var city=document.getElementById('city').value;
            var state=document.getElementById('state').value;
            var streetaddress=document.getElementById('streetaddress').value;
            
             var cardnumber=document.getElementById('cardnumber').value;
            var securitycode=document.getElementById('securitycode').value;
            
            var selecteditem=document.getElementById('selectbox');

            var val=selecteditem.options[selecteditem.selectedIndex].value;

            var date=document.getElementById('date').value;
            
                    
            
            var notify=document.getElementById("notify");

            if(zipcode==""||city==""||state==""||streetaddress==""||cardnumber==""||securitycode==""){
        
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