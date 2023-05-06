
<p style="color:red;"><?php session_start() ?>
<?php echo $_SESSION['msg1'];?>
<?php echo $_SESSION['msg1']="";?></p>
<link rel="stylesheet" href="css/footer.css">
<title>Chnage Password</title>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />
<div class="header-top bg-theme-color-2 sm-text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="widget no-border m-0">
          <ul class="list-inline">
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">+21650078054</a> </li>
            <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Mon-Fri 8:00 to 2:00 </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">nader.sdiri199@gmail.com</a> </li>
          </ul>
        </div>
      </div> 
      </div>
    </div>
  </div>
</div>

<div class="header-nav">
   
    <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
      <div class="container">
        <nav id="menuzord-right" class="menuzord default">
          <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
            <img src="css/images/logo.png" alt="">
          </a>
         
          <ul class="menuzord-menu">
            <li class="active"><a href="/agence/indexcli.php">Home   <span class="indicator"></span></a>
            <li><a href="nosVoiture.php">Nos Voitures</a>
            
            <li><a href="nosService.php">Nos Service</a>
              <ul class="dropdown">
                <li><a href="index-mp-layout1.html">Transport toutes distances</a></li>
                <li><a href="index-mp-layout2.html">Transport gare et aéroport</a></li>
                <li><a href="nosVoiture.php">Location des voitures</a></li>
              </ul>
            <li><a href="#">Info</a>
              <ul class="dropdown">
                <li><a href="index-mp-layout1.html">About Us</a></li>
                <li><a href="index-mp-layout2.html">FAQ</a></li>
                <li><a href="contactus.php">Contact us</a></li>
              </ul>
              <li><a href="logincli.php">Log Out</a>
          </ul>
          
        </nav>
      </div>
    </div>
    
    
  </div>

  <!-- Favicon and Touch Icons -->
<link href="css/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="css/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="css/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="css/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="css/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css/css-plugin-collections.css" rel="stylesheet"/>


<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/css/style.css" rel="stylesheet" type="text/css"> -->



<!-- CSS | Theme Color -->
<link href="css/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">


  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<!-- external javascripts -->

<script src="css/js/jquery-2.2.4.min.js"></script>
<script src="css/js/jquery-plugin-collection.js"></script>

<script src="css/js/jquery-ui.min.js"></script>

<!-- JS | jquery plugin collection for this theme -->
<script src="css/js/bootstrap.min.js"></script>
<link href="css/css/bootstrap.min.css" rel="stylesheet" type="text/css">



<script src="css/js/custom.js"></script>

<script type="text/javascript" src="css/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
  <script type="text/javascript" src="css/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
  <script type="text/javascript" src="css/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
  <script type="text/javascript" src="css/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
  <script type="text/javascript" src="css/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
  <script type="text/javascript" src="css/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
  <script type="text/javascript" src="css/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
  <script type="text/javascript" src="css/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
  <script type="text/javascript" src="css/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

  
  

<form name="chngpwd" action="" method="post" onSubmit="return valid();">
<table align="center">
<tr height="50">
<td>Old Password :</td>
<td><input type="password" name="password"></td>
</tr>
<tr height="50">
<td>New Passowrd :</td>
<td><input type="password" name="npword"></td>
</tr>
<tr height="50">
<td>Confirm Password :</td>
<td><input type="password" name="cpwd" id="cpwd"></td>
</tr>
<tr>
<td><a href="indexcli.php">Go to login Page</a></td>
<td><input type="submit" name="update" value="Change Passowrd" /></td>
</tr>
 </table>
</form>

<footer>
  <p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://www.facebook.com/nader.thegeek">Nader Sdiri</a>
    Follow me : 
      <a target="_blank"  href="https://www.instagram.com/nader.sdiri/"><i class="fab fa-instagram"></i></a>
    <a target="_blank"  href="https://www.linkedin.com/in/nader-sdiri/"><i class="fab fa-linkedin"></i></a>
    <a target="_blank" href="https://codepen.io/nader-sdiri/"><i class="fab fa-codepen"></i></a> 
        <a target="_blank" href="https://dev.to/theycallmenader"><i class="fab fa-dev"></i></a> 
             <a target="_blank" href="https://twitter.com/naderthegeektn"><i class="fab fa-twitter-square"></i></a> 
	</p>
</footer>

<script >
function valid()
{
if(document.chngpwd.password.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.password.focus();
return false;
}
else if(document.chngpwd.npword.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npword.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npword.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>
<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$DBname='agencevoiture';
$conn = mysqli_connect($servername, $username, $password, $DBname);

if(isset($_POST['update']))
{ $oldpassword=$_POST['password'];
  $newpassword =$_POST['npword'];

$modifier="UPDATE utilisateurs set mot_de_passe ='$newpassword' where '$oldpassword'=mot_de_passe;";
$excute=mysqli_query($conn, $modifier)or die('Erreur SQL !'.$modifier.'<br>'.mysqli_error($conn));
if($excute)
echo "mot de passe modifier avec succes";
else
echo "La modification n'a pas été effectué";
}
?>
