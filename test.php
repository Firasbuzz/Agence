<?php
require 'connection.php';
if(isset($_POST['Login']))
{
$email=$_POST['Username'];
$password=md5($_POST['password']);
if (empty($email)){
	echo("Email invalide");
	exit();
}else if (empty($password)){
	echo("Password invalide");
	exit();
}else{
		$sql ="SELECT email ,mot de passe FROM tblusers WHERE email='$email' and ,mot de passe='$password'";
		$result=mysqli_query($sql);
		if(mysqli_num_rows($result)===1){
			$row= mysqli_fetch_assoc($result);
				if($row['Username']=== $uname && $row['password']===$password){
					$_SESSION['Username']=$row['Username'];
					$_SESSION['name']=$row['name'];
					$_SESSION['id']=$row['id'];
					header("Location: menu.php ");
					exit();
				}else{
					header("location index.php?>error = Incorect Username or Password");
					exit();
				}
			else{
				header("location index.php?>error = Incorect Username or Password");
				exit();
			}
			}
	}
}else{
	header("Location: index.php");
	exit();
}
if(isset($_POST('Sign Up'))){
	$username=$_POST['user'];
}
?>
<html>
    <head>
    <link rel="stylesheet" href ="css\test.css">
    <title></title>
</head>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">	
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" name="login" class="btnlog" value="Login ">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="num" class="label">Phone Number</label>
					<input id="num" type="text" class="input" >
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input">
				</div>
                <div class="group">
                    <label for="age" class="label">Age</label>
                    <input id="age" type="text" class="input">
                </div>
                <div class="group">
                    <label for="Ville" class="label">Village</label>
                    <input id="ville" type="text" class="input">
                </div>
                <div class="group">
                    <label for="adr" class="label">Address</label>
                    <input id="adr" type="text" class="input">
                </div>
                <div class="group">
                    <label for="sexe" class="label">Sexe</label>
                    <input id="sexe" type="radio" class="input">
                </div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>