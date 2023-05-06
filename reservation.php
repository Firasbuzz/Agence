<!DOCTYPE html>
<html>
  <head>
    <title>Reservation</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <head>  
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"/>
    <link rel="stylesheet" href="css\reservation.css"> 
    <link rel="stylesheet" href="nosVoiture.css"/></head>
  </head>
  <body>
    <div class="main-block">
      <h1>Reservation</h1>
      <form action="" method="post">
        <div class="info">
          <input class="fname" type="text" name="Numéroréservation" placeholder="Numéro de réservation">
          <input type="text" name="Datedébut" placeholder="Date début">
          <input type="text" name="Datefin" placeholder="Date fin">
          <input type="text" name="Nomdutilisateur" placeholder="Nom dutilisateur">
          <input type="text" name="Immatricule" placeholder="Immatricule">
        </div>

        <tr> <td> <input type="submit" name="ajouter" value="Enregistrer" class="box-button" /></td><td><input type="submit" value="Retour" name="Retour" href ="Menu.php"></td>
      </form>
    </div>
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
$servername = 'localhost'; 
$username = 'root';
$password = '';
$DBname='agencevoiture';
$conn = mysqli_connect($servername, $username, $password, $DBname);
if(isset($_POST['ajouter']))
{   $Numreser=$_POST['Numéroréservation'];
    $datdeb=$_POST['Datedébut'];
    $datfin=$_POST['Datefin'];
    $usn=$_POST['Nomdutilisateur'];
    $Immatricule=$_POST['Immatricule'];

$insert="INSERT INTO réservation VALUES('$Numreser','$datdeb','$datfin','$usn','$Immatricule');";
$excute=mysqli_query($conn, $insert)or die('Erreur SQL !'.$insert.'<br>'.mysqli_error($conn));
if($excute)
echo "information enregistrées avec succes";
else
echo "L'enregistrement n'a pas été effectué";
}
if(isset($_POST['Retour']))
{header("Location:nosVoiture.php");}
?>
<?php?>