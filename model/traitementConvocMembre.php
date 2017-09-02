<?php

$requete = "SELECT * FROM convoc WHERE id_convoc='6'";
$result = $bdd->query($requete);
while ($donnees = $result->fetch()) {
    if (!empty($donnees['prenomJoueur4']) && !empty($donnees['nomJoueur4'])){
        echo "<table class='col-xs-12'>
                    <tbody>
                        <tr col-xs-12>
                            <td class='col-xs-6 text-center'>Le : " .$donnees['jour']. " " .$donnees['mois']. "</td>
                            <td class='col-xs-6 text-center'>A : " .$donnees['heure'] ."</td>
                        </tr>
                        <tr col-xs-12>
                            <td class='text-center'>" .$donnees['equipe']. "</td>
                            <td class='text-center'>" .$donnees['adversaire']. "</td>
                        </tr>
                        
                        <tr>
                            <td colspan=2>Commentaire : " .$donnees['commentaire'] ."</td>
                        </tr>
                        <tr>
                            <td colspan=2 class='text-center'>- " .$donnees['nomJoueur1']. ' ' .$donnees['prenomJoueur1']. "</td>
                        </tr>
                        <tr>
                            <td colspan=2 class='text-center'>- " .$donnees['nomJoueur2']. ' ' .$donnees['prenomJoueur2']. "</td>
                        </tr>
                        <tr>
                            <td colspan=2 class='text-center'>- " .$donnees['nomJoueur3']. ' ' .$donnees['prenomJoueur3']. "</td>
                        </tr>
                        <tr>
                            <td colspan=2 class='text-center'>- " .$donnees['nomJoueur4']. ' ' .$donnees['prenomJoueur4']. "</td>                  
                        </tr> 
                    </tbody>
            </table>
            </br>";
    }
    else {
        echo "<table>
                    <tbody>
                        <tr>
                            <td class='col-xs-5'>" .$donnees['equipe']. "</td>
                            <td class='col-xs-2'>VS</td>
                            <td class='col-xs-5'>" .$donnees['adversaire']. "JOUR</td>
                        </tr>
                        <tr>
                            <td class='col-xs-6'>Le : " .$donnees['jour']. " " .$donnees['mois']. "</td>
                            <td class='col-xs-6'>A : " .$donnees['heure'] ."</td>
                        </tr>
                        <tr rowspan=4>
                            <td class='col-xs-12'>Commentaire : " .$donnees['commentaire'] ."</td>
                        </tr>
                        <tr rowspan=4>
                            <td colspan='4'>- " .$donnees['nomJoueur1']. ' ' .$donnees['prenomJoueur1']. "</br>
                            - " .$donnees['nomJoueur2']. ' ' .$donnees['prenomJoueur2']. "</br>
                            - " .$donnees['nomJoueur3']. ' ' .$donnees['prenomJoueur3']. "</br>
                            </td>
                        </tr> 
                    </tbody>
            </table>
            </br>";
    }
}