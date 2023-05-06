<?php
        $servername = 'localhost'; 
        $username = 'root';
        $password = '';
        $DBname='agencevoiture';
        $conn = mysqli_connect($servername, $username, $password, $DBname);
        $requete = "SELECT * FROM Voiture";
        $exec_requete = mysqli_query($conn,$requete)or die('Erreur SQL !'.$requete.'<br>'.mysqli_error($conn));
       echo "<table border = 2> <tr> <th> Immatricule </th><th> modèle </th> <th> Couleur </th> <th> Etat </th> </tr>" ;
      while($reponse= mysqli_fetch_array($exec_requete))
       { 
        echo "<tr> <td>". $reponse['immatricule'] . "</td><td> ". $reponse["modèle"] . " </td> <td>". $reponse['couleur'] . "</td> <td>". $reponse['etat'] . "</td> </tr>";
       }

       echo "</table>";
       
       
if(isset($_POST['Retour']))
{header("Location:indexad.php");}


  ?>
<html>
<form  method="post">
<br> <br>

<input type="submit" value="Retour" name="Retour">
</form>
      </body>
</html>