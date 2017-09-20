<?php

$requeteSelect = "SELECT date_envoi, pseudo, id_message, contenu FROM membre INNER JOIN message
ON membre.id_membre = message.id_membre ORDER BY id_message DESC LIMIT 10";
$result = $bdd->query($requeteSelect);
while($donnees = $result->fetch()){
    $date_envoi = new Datetime($donnees['date_envoi']);
    $dateFormat = date_format($date_envoi, 'd-m-Y H:i');
    if($donnees['pseudo'] == $_SESSION['pseudo']){
        echo "<p id='" .$donnees["id_message"]. "'><span class='pseudoMoi'>" .$donnees['pseudo'].
        "</span> : le " .$dateFormat. "</br>"
        .$donnees['contenu']."</p>";
    }
    else{
        echo "<p id='" .$donnees["id_message"]. "' class='text-right'><span class='pseudoAutre'>" .$donnees['pseudo'].
        "</span> : le " .$dateFormat. "</br>"
        .$donnees['contenu']."</p>";
    }
}