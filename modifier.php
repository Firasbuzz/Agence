
<html>
    <head><link rel="stylesheet" href="css\fonction.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/footer.css"/>
</head>
<body >
<center>
<form action="" method="post">
<legend><b>Modifier une voiture</legend>
<table>
<tr> <td> Immatricule: </td><td><input type="text" size=30 name="Immatricule" /></td> </tr>
<tr> <td> Nouveau modele: </td><td> <input type="text" size=30 name="Modele" /></td></tr>
<tr> <td> Nouveau Couleur: </td><td><input type="text" size=30 name="Couleur" /></td> </tr>
<tr> <td> Etat: </td><td> <input type="text" size=30 name="etat" /></td></tr>
<tr> <td> <input type="submit" name="update" value="Modifier" /></td>
<td> <input type="submit" name="retour" value="Retour" /></td>
</tr>
</center>
</form>
</body>
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

</html>
<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$DBname='agencevoiture';
$conn = mysqli_connect($servername, $username, $password, $DBname);

if(isset($_POST["retour"])){
    header("Location:indexad.php");
    exit();
}
if (isset($_POST["upadate"])){
    $immatricule=filter_var($_POST["Immatricule"],FILTER_SANITIZE_STRING);
    $modele=filter_var($_POST["modele"],FILTER_SANITIZE_STRING);
    $couleur=filter_var($_POST["Couleur"],FILTER_SANITIZE_STRING);
    $etat=filter_var($_POST["etat"],FILTER_SANITIZE_STRING);
    if(!empty($immatricule) && !empty($modele) && !empty($Couleur) && !empty($etat))
    {
        $req="SELECT * from voiture where immatricule='$immatricule'";
        $res=mysqli_query($conn,$req);
        if (!$res){
            echo "echec de la requete : $req : erreur numero :".mysqli_errno($conn)." : ".mysqli_error($conn)."<br>";
            echo "<a href='htmlpage.html'>Acceuil</a>";
            exit();
        }
        if(mysqli_num_rows($res)==0){
                $req="UPDATE voiture set immatricule='$immatricule',
                modèle='$modele',
                couleur='$couleur',
                etat='$etat'
                 where immatricule='$immatricule'";
                $res=executer_req($req);
                header("location:indexad.php");     
                if(!$res){
                    echo "echec de la requete : $req numero erreur :".mysqli_errno($conn). " : ".mysqli_error($conn);
                    echo "<a href='ajouter.php'></a>";
                    exit();
                }
                header("location:ajouter.php");
            }
        }
    }