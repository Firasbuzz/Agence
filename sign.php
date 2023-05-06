<?php
require_once('connection.php') ;
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des voitures</title>
    <link rel="stylesheet" a href="signup.css">
    <link rel="stylesheet" a href="css\font-awesome.min.css">
</head>

<body style="background-color:selver;">

    <form class="box" action="" method="post" enctype="application/x-www-form-urlencoded">

        <fieldset>
            <legend><b>Inscrit</legend>
            <table>
            
                <tr>
                    <td> Nom d'utulisateur: </td>
                    <td><input type="text" size=30 name="username" /></td>
                </tr>


               
                
                <tr>
                    <td> MOT de passe: </td>
                    <td> <input type="text" size=30 name="MDP" /> </td>
                </tr>
                <tr>
                    <td> Email: </td>
                    <td> <input type="text" size=30 name="email" /> </td>
                </tr>

                <tr>
                    <td> Numéro: </td>
                    <td> <input type="text" size=30 name="NTel" /> </td>
                </tr>
                <tr>
                    <td> Sexe: </td>
                    <td> <input type="text" size=30 name="Sexe" /> </td>
                </tr>
                <tr>
                    <td> Age: </td>
                    <td> <input type="text" size=30 name="Age" /> </td>
                </tr>
                <tr>
                    <td> ville </td>
                    <td> <input type="text" size=30 name="Ville" /> </td>
                </tr>
                <td> Adresse </td>
                    <td> <input type="text" size=30 name="Adresse" /> </td>
                </tr>
                <tr>
                    <td>
                    <Button type="submit" name="submit">Enregistrer</Button>


                    </td>
               
                    <td> <input type="submit" name="login" value="login" class="box-button" /></td>
                </tr>

        </fieldset>
    </form>
</body>

</html>

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
    $MDP = $_POST['mot_de_passe'];
    $email = $_POST['email'];
  $NTel = $_POST['num_téléphone'];
  $Sexe = $_POST['sexe'];
  $Age = $_POST['age'];

  $Ville = $_POST['ville'];
  $Adresse = $_POST['adresse'];


    $insert = "INSERT INTO utilisateurs (Nom_dutilisateur,mot_de_passe,email,num_téléphone,sexe,age,ville,adresse)  VALUES ('$username', '$MDP',' $email','$NTel','$Sexe', ' $Age','$Ville','$Adresse');";
    $excute = mysqli_query($connex, $insert);
    //echo ("uccès");

    if ($excute)
        echo ("information enregistrées avec succès");
    else
        echo ("L'enregistrement n'a pas été effectué");
}
if (isset( $_POST['login'])) 
{
    header('Location: logincli.php');
}
?>