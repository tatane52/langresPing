<?php
require_once('connectionBdd.php');

$requete = "SELECT * FROM tchat WHERE id_tchat > '" .$_GET["idMessage"]."' ORDER BY id_tchat DESC";
$result = $bdd->query($requete);

while($donnees = $result->fetch()) {
    $date_envoi = new Datetime($donnees['date_envoi']);  
    $dateFormat = date_format($date_envoi, 'd-m-Y H:i:s');
    echo "<p class='text-right'><span class='pseudoAutre'>" .$donnees['pseudo']. "</span> : le " .$dateFormat. "</br>"
    .$donnees['message']."</p>";;
    
}    

?>