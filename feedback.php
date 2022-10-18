<?php 
require('config.php');
if(isset($_POST['submit']))
{	
	
	 $fullname = $_POST['fullname'];
     $email = $_POST['email'];
     $opinion = $_POST['opinion'];
   
     
    
    
     mysqli_query($conn,"INSERT into feedback(fullname,email,opinion) 
        values('$fullname','$email','$opinion')");
        echo '<script>alert(" Thank you !")</script>';
       
    
   
  
}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Feedback </title>
    <link rel="stylesheet" href="feed.css">
</head>
<body>
    <section></section>
    <div class="container">
        <form  method="post"><center>
            <h1>Give your Feedback</h1>
            <div class="id">
                <input type="text"  name="fullname" placeholder="Full name" required>
                <i class="far fa-user"></i>
            </div>
            <div class="id">
                <input type="email" name="email"placeholder="Email address" required>
                <i class="far fa-envelop"></i>

            </div>
            <textarea cols="15" rows="5" name="opinion" placeholder="Enter your opinions here..." required></textarea>
            <button class="btnn" name="submit" value="" ><a >submit</a></button></center>
        </form>
    </div>
</body>
</html>
