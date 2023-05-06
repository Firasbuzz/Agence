<?php
    if(isset($_POST["annuler"]) && $_POST["annuler"]==="annuler"){
        header("location:login.php");
        die();      /*exit()*/
    }
    if(isset($_POST["envoyer"])&& $_POST["envoyer"]==="envoyer"){
        $nom=filter_var($_POST["nom"],FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES);
        $PRENOM=filter_var($_POST["PRENOM"],FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES); 
        $pseudo=filter_var($_POST["pseudo"],FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES);
        $TELEPHONE=filter_var($_POST["pseudo"],FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES);
        $mdp=filter_var($_POST["mdp"],FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES);
        $email=filter_var($_POST["email"],FILTER_VALIDATE_EMAIL,FILTER_NULL_ON_FAILURE);
        if(empty($nom) || empty($pseudo) || empty($mdp)|| empty($email)){
            echo '<script>alert("donnée manquant ")</script>';
        }
        else{
            $conn=@mysqli_connect("localhost","root","","test"); /* établir une connexion */
            if(!$conn){
                echo "Echec de connexion erreur num :".mysqli_connect_errno()." : ".mysqli_connect_error()."<br>";
                echo "<a href='htmlpage.html'>Acceuil</a>";
                exit();
            }
            $req="SELECT * from comptes WHERE pseudo='$pseudo'";
            $res=mysqli_query($conn,$req);
            if(!$res){
                echo "Echec de requête $req <br>".mysqli_errno($conn)." : ".mysqli_error($conn)."<br>";
                echo "<a href='index.html'>Acceuil</a>";
                exit();
            }
            if(mysqli_num_rows($res)>0){
                echo " $pseudo est utilisé par un autre utilisateur<br>";
            }
            else{           
                $req="INSERT INTO comptes (nom,prenom,pseudo,telephone,mdp,email) VALUES ('$nom','$PRENOM','$pseudo', '$TELEPHONE','$mdp', '$email')";
                $res=mysqli_query($conn,$req);
                if(!$res){
                    echo "Echec de requête $req <br>".mysqli_errno($conn)." : ".mysqli_error($conn)."<br>";
                    echo "<a href='index.html'>Acceuil</a>";
                    exit();
                    
                }
                
                echo '<script>alert("inscription avec succée ")</script>';
            }
        }
    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<link href="c.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body background-image: url("image/language-background.png");>
<div id="menu">
<ul>

<li><a href="login.php">connexion  </a></li>
<li><a href="contacter.html"> contacter nous</a> </li>
</ul></div>
<div id="container">
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <fieldset>
                <h1>inscription</h1>
                <table>
                    <tr>
                        <td><label for="nom">Nom :</label></td>
                        <td><input type="text" id="nom" name="nom"></td>
                    </tr>
                    
                    <tr>
                        <td><label for="PRENOM">PRENOM:</label></td>
                        <td><input type="text" id="PRENOM" name="PRENOM"></td>
                    </tr>
                    <tr>
                        <td><label for="pseudo">Pseudo:</label></td>
                        <td><input type="text" id="pseudo" name="pseudo"></td>
                    </tr>
                    <tr>
                        <td><label for="TELEPHONE">TELEPHONE:</label></td>
                        <td><input type="text" id="TELEPHONE" name="TELEPHONE"></td>
                    </tr>
                    <tr>
                        <td><label for="mdp">Mot de Passe:</label></td>
                        <td><input type="password" id="mdp" name="mdp"></td>
                    </tr>
                    
                    <tr>
                        <td><label for="email"> Adresse mail :</label></td>
                        <td><input type="text" id="email" name="email"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="envoyer" value="envoyer">
                            <input type="submit" name="annuler" value="annuler">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </section>
    </div>
</body>
</html>