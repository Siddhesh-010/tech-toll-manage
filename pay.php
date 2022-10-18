<?php 
require('config.php');
if(isset($_POST['submit']))
{	
	
	 $owner = $_POST['owner'];
     $cvv = $_POST['cvv'];
     $cardno = $_POST['cardno'];
     $valid = $_POST['valid'];
   
     
    
    
     mysqli_query ($conn,"INSERT into pay(owner,cvv,cardno,valid )  
     values('$owner','$cvv','$cardno','$valid')");
        echo '<script>alert(" Thank you  for payment!")</script>';
       
    
   
  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Form</title>
    <link rel="stylesheet" href="pay.css">
    
   
</head>
<body>
    <div class="container"><form method="post">
        <h1>Confirm Your Payment</h1>
        <div class="first-row">
            <div class="owner">
                <h3>Owner</h3>
                <div class="input-field">
                    <input type="text" name="owner"required>
                </div>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="password" name="cvv" required> 
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Card Number </h3>
                <div class="input-field">
                    <input type="text" name="cardno" required>
                </div>
            </div>
        </div>
        <div class="third-row">
            <h3>Valid Upto</h3>
            <div class="select">
                <div class="date">
                    <input type="text" name="valid" placeholder="year" id="year" >
                       
                   
                        
</input>
                </div>
                <div  class="cards">
                    <img src="mc.png" alt="">
                    <img src="vs.png" alt="">
                    <img src="pp.png" alt="">
                </div>
            </div>
        </div>
        <input href=""type="submit" name="submit"SUBMIT></form>
    </div>
</body>
</html>