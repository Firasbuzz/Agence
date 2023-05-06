<?php
        $servername = 'localhost'; 
        $username = 'root';
        $password = '';
        $DBname='agencevoiture';
        $conn = mysqli_connect($servername, $username, $password, $DBname);
        $requete = "SELECT * FROM réservation";
        $exec_requete = mysqli_query($conn,$requete)or die('Erreur SQL !'.$requete.'<br>'.mysqli_error($conn));
       echo "<table border = 2> <tr> <th> 'numéro de réservation </th><th> date début </th> <th> date fin </th> <th> nom dutilisateur </th> <th> immatricule </th> </tr>" ;
      while($reponse= mysqli_fetch_array($exec_requete))
       { 
        echo "<tr> <td>". $reponse['numéro de réservation'] . "</td><td> ". $reponse["date début"] . " </td> <td>". $reponse['date fin'] . "</td> <td>". $reponse['nom dutilisateur	'] . "</td> <td>". $reponse['immatricule'] . "</td> </tr>";
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