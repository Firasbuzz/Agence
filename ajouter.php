<?php
?>
<html>
<head>  <link rel="stylesheet" href="css\fonction.css"> 
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="css/footer.css"/>
</head>

<body>
<center>
<form action="" method="post">
<legend><b>Ajouter Une Voiture</legend>
<table>
<tr> <td> Immatricule </td><td><input type="text" size=30 name="Immatricule" /></td> </tr>
<tr> <td> Modele: </td><td> <input type="text" size=30 name="Modele" /></td></tr>
<tr> <td> Couleur </td><td> <input type="text" size=30 name="Couleur" /></td></tr>
<tr> <td> Etat </td><td> <input type="text" size=30 name="Etat" /></td></tr>
<tr> <td> <input type="submit" name="ajouter" value="Enregistrer" class="box-button" /></td><td><input type="submit" value="Retour" name="Retour" href ="Menu.php"></td>
</tr>
</form>
</center>

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

if(isset($_POST['ajouter']))
{ $Immatricule=$_POST['Immatricule'];
$Modele=$_POST['Modele'];
$Couleur=$_POST['Couleur'];
$Etat=$_POST['Etat'];

$insert="INSERT INTO voiture VALUES('$Immatricule','$Modele','$Couleur','$Etat');";
$excute=mysqli_query($conn, $insert)or die('Erreur SQL !'.$insert.'<br>'.mysqli_error($conn));
if($excute)
echo "information enregistrées avec succes";
else
echo "L'enregistrement n'a pas été effectué";
}
if(isset($_POST['Retour']))
{header("Location:indexad.php");}
?>
<?php?>