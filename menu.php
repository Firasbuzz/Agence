<?php
require 'connection.php';
/*if(empty(trim($username)) || empty(trim($password))){
    echo "<script>alert ('Voulez-vouz verifier votre cordonees')</script>";
}*/
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href ="css\style.css">
<title>Login</title>
</head>
<body>
    <style>body{
        background-image:url("img/bg.jpg");
        background-repeat:no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-size: 100% 100%;
    }</style>
        <form method="POST" name="form1" action="menu.php">
            <center><h2>Login</h2>
            <div class="input-container">
                <i class="icon"> <img src="img/usericon.png" alt=""></i>
                <input class="input-field" type="text" placeholder="Username" name="un">
            </div>
            <div class="input-container">
                <i class="icon"> <img src="img/password.png" alt=""></i>
                <input class="input-field" type="text" placeholder="Password" name="un">
            </div>
            <button type="submit" class="btn">Sign in</button>
            </center>
        </form>
       
</body>
</html>
