<?php require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des voitures</title>
    <link rel="stylesheet" a href=login.css">
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
                
             </form> 
          
          
          
         </div>
        </fieldset>
    </form>
</body>

</html>

         <?php
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
                        header("location:indexad.php");

                    }
                    else{
                        echo"<font color='#f0001D'>login ou mot de passe est invalide</font>";
                    }
                    }
                }

                         
?>