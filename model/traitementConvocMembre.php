<?php

$dDay = date('Y-m-d');


$requete = "SELECT * FROM convoc WHERE jour>='$dDay'";
$result = $bdd->query($requete);
while ($donnees = $result->fetch()) {
    $date = new Datetime($donnees['jour']);  
    $dateFormat = date_format($date, 'd-m-Y');
    if (!empty($donnees['prenomJoueur4']) && !empty($donnees['nomJoueur4'])){
        echo "<table class='col-xs-12'>
                    <tbody>
                        <tr>
                            <td>" .$donnees['equipe']. " VS " .$donnees['adversaire']."</td>
                        </tr>
                        <tr>
                            <td>Le : " .$dateFormat. " à " .$donnees['heure']. " " .$donnees['lieu']."</td>      
                        </tr>
                        <tr>
                            <td>Commentaire : " .$donnees['commentaire'] ."</td>
                        </tr>
                        <tr>
                            <td>- " .$donnees['nomJoueur1']. ' ' .$donnees['prenomJoueur1']. "</br>
                            - " .$donnees['nomJoueur2']. ' ' .$donnees['prenomJoueur2']. "</br>
                            - " .$donnees['nomJoueur3']. ' ' .$donnees['prenomJoueur3']. "</br>
                            - " .$donnees['nomJoueur4']. ' ' .$donnees['prenomJoueur4']. "</br>
                            </td>
                        </tr> 
                    </tbody>
            </table>";
    }
    else {
        echo "<table class='col-xs-12'>
                    <tbody>
                        <tr>
                            <td>" .$donnees['equipe']. " VS " .$donnees['adversaire']."</td>
                        </tr>
                        <tr>
                            <td>Le : " .$dateFormat. " à " .$donnees['heure']. " " .$donnees['lieu']."</td>      
                        </tr>
                        <tr>
                            <td>Commentaire : " .$donnees['commentaire'] ."</td>
                        </tr>
                        <tr>
                            <td>- " .$donnees['nomJoueur1']. ' ' .$donnees['prenomJoueur1']. "</br>
                            - " .$donnees['nomJoueur2']. ' ' .$donnees['prenomJoueur2']. "</br>
                            - " .$donnees['nomJoueur3']. ' ' .$donnees['prenomJoueur3']. "</br>
                            </td>
                        </tr> 
                    </tbody>
            </table>";
    }
}