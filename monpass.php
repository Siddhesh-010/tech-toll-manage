<?php
require('config.php');
if(isset($_POST['submit']))
{	
	
	 $vehicleno	 = $_POST['vehicleno'];
     $ticketno = $_POST['ticketno'];
     $tollname = $_POST['tollname'];
     $vehicle = $_POST['vehicle'];
     $laneno = $_POST['laneno'];
     $journey = $_POST['journey'];
     $fee = $_POST['fee'];
     $date =$_POST['date'];
     
    
    
     mysqli_query ($conn,"INSERT into monpass(vehicleno	,ticketno,tollname,vehicle,laneno,journey,fee,date) 
       values('$vehicleno','$ticketno','$tollname',' $vehicle',' $laneno','$journey','$fee','$date')");
        echo '<script>alert(" Thank you !")</script>';
       
    
   
  
}
?>






<!DOCTYPE html>
<html>

<head>
    <title>Toll Recipt</title>
    <link rel="stylesheet" href="receipt.css">
</head>

<body>

    <div class="receipt-form" style="background:ghostwhite">
        <form id="print-form" method="post">
            <div class="label1">
                <h3>Vehicle Number:</h3>
                <input type="int" name="vehicleno"   placeholder="vehicle Number">
            </div>
            <div class="label2">
                <h3>Ticket Number:</h3>
                <input type="text" name="ticketno"  placeholder="Ticket Number">
            </div>
            <h3>Date:</h3>
            <input type="text" name="date" placeholder="DD-MM-YYYY">
            
            <h3>Name of toll :-</h3>
            <input value="Tech Toll Plaza">
            

            
            <h3>Type of Vehicle:</h3>
        
        <select>
            <option>2 Wheeler</option>
            <option>4 Wheeler</option>
            <option>travellers/trucks</option>
            <option>Trucks</option>
        </select>
            
            <h3>Lane Number:</h3>
            <select>
                <option>Lane 1</option>
                <option>Lane 2</option>
                <option>Lane 3</opyion>
                <option>Lane 4</option>
                
            </select>

            <h3>Type of journey:</h3>
            <select>
                <option>Single</option>
                <option>return</option>
            </select>
            
            

            <h3>Fee:</h3>
            <select>
                <option>350</option>
                <option>550</option>
                <option>750</option>
                <option>950</option>
</select>


            <div class="button1">
                <button type="submit" id="btn1" name=" submit">Submit</button>
            </div>







        </form>
    </div>
</body>

</html>
                