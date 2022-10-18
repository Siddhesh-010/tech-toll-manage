<?php 

include 'config.php';

session_start();

error_reporting(0);



if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM reg WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
        true;
		$_SESSION['username'] = $row['username'];
		
		header("Location: index.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
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
            <input type="text" name="username" placeholder="Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="submit">Login</button>
            <a href="registration.php"><b><br>DON'T HAVE AN ACCOUNT?<br>REGISTER HERE  </b></a><br>

        </form>
    </div>
</body>