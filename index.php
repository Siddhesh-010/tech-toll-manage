<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.html">
    <script src="login2.js"></script>
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">  
                <h2 class="logo">Toll Management</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="feedback.php">FEEDBACK</a></li>
                    <li><a href="cont.html">CONTACT</a></li>
                    <li><a href="monpass.php">MONTHLY PASS</a></li>
                    <li><a href="price.html">Price Details</a></li>
                   
                    <li><a href="login.pphp.php">Login/Registraion</a></li>
                </ul>
            </div>

            

        </div> 
        <div class="content">
            <h1>WELCOME TO <br><span>Toll tax control</span></h1>
            <p class="par"> Toll Tax is generally termed as a tax a driver must has to pay to government throughout the journey.<br>It is generally a qauntification of money an individual had to pay in the return <br>of using roads , tunnels and national highways . <br>This roads and bridges are devloped under the government &<br> National Highway Authority of India(NHAI).</p>   
                
                <button class="cn"><a href="">Thank You!</a></button>
                <div class="form" method="post">
                    <h2>Admin Login</h2>
                    <input type="username" name="" placeholder="Enter username Here" id="username">
                    <input type="password" name="" placeholder="Enter Password Here" id="password">
                    <button class="btnn" name="" value="login" onclick="validate()"><a href="price.html">Login</a></button>
                    <script src="login2.js"></script>

                

                    <p class="link">Don't have an account?<br>
                    <a href="reg.php">Sign up </a> here</a></p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                        
                    </div>
                     

                 </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>