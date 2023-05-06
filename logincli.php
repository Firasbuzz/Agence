<?php require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des voitures</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="nosVoiture.css"/>
    <link rel="stylesheet" a href=css/login.css">
    <link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body style="background-color:selver;">

    <form class="box" action="" method="post" enctype="application/x-www-form-urlencoded">

     <fieldset>
            <legend><b>LOGIN</legend>
         <div id="container">
            <form action="" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input  name="btlogin" type="submit" id='submit' value='LOGIN' >
                <p class="Login-register-text">vou n'avez pas de compte<a href="sign.php">Inscrit</a></p>
             </form> 
          
          
          
         </div>
        </fieldset>
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

         <?php
		$connex = mysqli_connect('localhost', 'root', '', 'agencevoiture');
		if($connex === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}

                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
                        </form>
      

  <?php 
                if(isset($_POST['btlogin']))
                {
                    $req="select * from utilisateurs where Nom_dutilisateur ='".$_POST['username']."'and mot_de_passe	='".$_POST['password']."'";
                    if($resultat=mysqli_query($connex,$req))
                    {
                    $ligne=mysqli_fetch_assoc($resultat);
                    if($ligne!=0){
                        session_start();
                        $_SESSION['monlogin']=$_POST['username'];
                        header("location:indexcli.php");

                    }
                    else{
                        echo"<font color='#f0001D'>login ou mot de passe est invalide</font>";
                    }
                    }
                }

                         
?>