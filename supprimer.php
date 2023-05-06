<html>
<head>  <link rel="stylesheet" href="css\fonction.css"> 
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
<CENTER>
<body>
<form action="" method="post">
<legend><b>Supprimer Une Voiture </legend>
Immatricule: </td><td><input type="text" name="Immatricule" />
<br>
<br>
<input type="submit" value="Supprimer" name="supprimer"/>
<input type="submit" value="Retour" name="Retour">
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
</CENTER>
</html>
<?php
$servername = 'localhost'; 
$username = 'root';
$password = '';
$DBname='agencevoiture';
$conn = mysqli_connect($servername, $username, $password, $DBname);
if(isset($_POST['supprimer']))
{$Immatricule=$_POST['Immatricule'];
$dell="DELETE from voiture
where immatricule='$Immatricule'; ";
$excute=mysqli_query($conn, $dell)or die('Erreur SQL !'.$insert.'<br>'.mysqli_error($conn));
if($excute)
echo "Informations supprimées avec succes";
else
echo "La suppression n'a pas été effectué";}
if(isset($_POST['Retour']))
{header("Location:indexad.php");}
?>