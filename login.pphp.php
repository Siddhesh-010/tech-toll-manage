<?php
require('config.php');
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	
	 $user = $_POST['user'];
     $password = $_POST['password'];

	 $sql_query = "INSERT INTO toll (user,password)
	 VALUES ('$user','$password')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
     header('location:index.php');

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login From</title>
    <link rel="stylesheet" href="login.css">
    
   
</head>
<body>
    <div class="login-form">
        <h1>Login Form</h1>
        <form action="#" method="post">
            <p>Username</p>
            <input type="text" name="user" placeholder="Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="save">Login</button>
            <a href="registration.php"><b><br>DON'T HAVE AN ACCOUNT?<br>REGISTER HERE  </b></a><br>

        </form>
    </div>
</body>