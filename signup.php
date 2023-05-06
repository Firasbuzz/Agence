<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$DBname = 'agencevoiture';

//On établit la connexion
$connex = mysqli_connect($servername, $username, $password, $DBname);
if (isset($_POST['submit']))
 {
    $username = $_POST['Nom_dutilisateur '];
    $user_email = $_POST['email'];
    $user_password = $_POST['mot_de_passe'];
  $user_numtlf = $_POST['num_téléphone'];
  $radiogroup1 = $_POST['sexe'];
  $user_age = $_POST['age'];
  $user_ville = $_POST['ville'];
  $user_adrs = $_POST['adresse'];


    $insert = "INSERT INTO utilisateurs (Nom_dutilisateur,email,mot_de_passe,num_téléphone,sexe,age,ville,Adresse)  VALUES ('$username', '$user_email',' $user_password','$user_numtlf','$radiogroup1', ' $user_age','$user_ville','$user_adrs');";
    $excute = mysqli_query($connex, $insert);
    //echo ("uccès");

    if ($excute)
        echo ("information enregistrées avec succès");
    else
        echo ("L'enregistrement n'a pas été effectué");
}
if (isset( $_POST['login'])) 
{
    header('Location: index.php');
}
?>
<html>
<head>
    <link rel="stylesheet" href ="css\signup.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
    
        
        <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"/>
    <link rel="stylesheet" href="footer.css"/>
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    </head>
    <body>

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
            <li class="active"><a href="/agence/index.php">Home   <span class="indicator"></span></a>
            
              
            
            </li>
            <li><a href="signup.php">Signup</a>
            </li>

            <li><a href="login.php">Login</a>

              <li><a href="#">Info</a>
              <ul class="dropdown">
                <li><a href="index-mp-layout1.html">About Us</a></li>
                <li><a href="index-mp-layout2.html">FAQ</a></li>
                <li><a href="contactus.php">Contact us</a></li>
              </ul>
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

  
      <form  method="post">
      
        <h1>Sign Up</h1>
        
        <fieldset>
        <label for="username">Nom dutilisateur:</label>
          <input type="text" id="name" name="username">          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">
          
          <label for="password">mot de passe:</label>
          <input type="password" id="password" name="user_password">
          <label for="num">Numero téléphone:</label>
          <input type="text" id="" name="user_numtlf">
          <label>Sexe:</label>
          <div class=radio">
              <input type="radio" name="radiogroup1" id="rd1">
              <label for="rd1">Male</label> <br>
              <input type="radio" name="radiogroup1" id="rd2">
              <label for="rd2">Female</label>
              </div>
         <label for="age">Age:</label>
          <input type="text" id="" name="user_age">
        <label for="ville">Ville:</label>
        <select id="ville" name="user_ville">
          <optgroup label="Ville">
            <option value="ville">Ariana</option>
            <option value="ville">Béja</option>
            <option value="ville"> Ben Arous</option>
            <option value="ville">Bizerte</option>
            <option value="ville">Gabes</option>
            <option value="ville">Gafsa</option>
            <option value="ville">Jendouba</option>
            <option value="ville">Kairouan</option>
            <option value="ville">Kasserine"</option>
            <option value="ville">Kebili</option>
            <option value="ville">La Manouba</option>
            <option value="ville">Le Kef</option>
            <option value="ville">Mahdia</option>
            <option value="ville">Médenine</option>
            <option value="vile">Monastir</option>
            <option value="ville">Nabeul</option>
            <option value="ville">Sfax</option>
            <option value="ville">Sidi Bouzid</option>
            <option value="ville">Siliana</option>
            <option value="ville">Sousse</option>
            <option value="ville">Tataouine</option>
            <option value="ville">Tozeur</option>
            <option value="ville">Tunis</option>
            <option value="ville">Zaghouan</option>
        </select>
          <label for="adrs">Address:</label>
          <input type="text" id="" name="user_adrs">
        </fieldset>
        <button type="submit">Sign Up</button>
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
    </body>
</html>