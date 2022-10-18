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

	 $sql_query = "INSERT INTO dinein (user,password)
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
<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="reg.css">
    </head>
    <body>
        <div class="registration-form">
            <h1>Registration Form</h1>
            <form action="reg.php" method="post">
                <p>Full Name:</p>
                <input type="text" name="fullname" placeholder="Full Name">
                <p>User Name:</p>
                <input type="text" name="username" placeholder="User Name">
                <p>Password:</p>
                <input type="password" name="password" placeholder="Password">
                
                <button type="submit">Registration</button>
            </form>
        </div>
    </body>
</html>