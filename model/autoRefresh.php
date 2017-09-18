<?php
require_once('connectionBdd.php');

$requete = "SELECT * FROM message WHERE id_message > '" .$_GET["idMessage"]."' ORDER BY id_message DESC";
$result = $bdd->query($requete);

while($donnees = $result->fetch()) {
    $date_message = new Datetime($donnees['date_envoi']);  
    $dateFormat = date_format($date_message, 'd-m-Y H:i:s');
    if($donnees['pseudo'] == $_SESSION['pseudo']){
        echo "<p id='" .$donnees['id_message']."' class='text-left'><span class='pseudoMoi'>" .$donnees['pseudo'].
         "</span> : le " .$dateFormat. "</br>"
        .$donnees['contenu']."</p>";
    }
    else{
        echo "<p id='" .$donnees['id_message']. "' class='text-right'><span class='pseudoAutre'>" .$donnees['pseudo'].
         "</span> : le " .$dateFormat. "</br>"
        .$donnees['contenu']."</p>";
    }  
}   
