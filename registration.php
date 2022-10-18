<?php
require('config.php');
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['submit']))
{	
	
	  $fullname=$_POST['fullname'];
     $username = $_POST['username'];
    
     $mobileno = $_POST['mobileno'];
     $password = $_POST['password'];
     
    
    if(mysqli_num_rows(mysqli_query($conn,"SELECT * from reg where username='$username'"))>0){
        echo'<script>alert("username Already exist")</script>';
      
    }
    else{
     
      mysqli_query($conn,"INSERT INTO reg(fullname,username,mobileno,password) 
        VALUES('$fullname','$username','$mobileno','$password')");
      
      
      header('location:login.php');
    }
  
   
  
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="reg.css">
    </head>
    <body>
        <div class="registration-form">
            <h1>Registration Form</h1>
            <form action="registration.php" method="post">
                <p>Full Name:</p>
                <input type="text" name="fullname" placeholder="Full Name">
                <p>User Name:</p>
                <input type="text" name="username" placeholder="User Name">
                <p>Mobile No.</p>
                <input type="text" name="mobileno" placeholder="Mobile NO">
                <p>Password</p>
                <input type="password" name="password" placeholder="Password">
                
                <button type="submit" name="submit" >Registration</button>
            </form>
        </div>
    </body>
</html>