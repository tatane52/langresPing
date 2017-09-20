<?php
session_start();
//connexion bdd
require_once('connectionBdd.php');

$id = $_GET["idMessage"];

$requete = "SELECT date_envoi, pseudo, id_message, contenu FROM membre INNER JOIN message
ON membre.id_membre = message.id_membre WHERE id_message >? ORDER BY id_message DESC";
$sql = $bdd->prepare($requete);
$sql->execute(array($id));

while($donnees = $sql->fetch()) {
    $date_message = new Datetime($donnees['date_envoi']);  
    $dateFormat = date_format($date_message, 'd-m-Y H:i');
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
