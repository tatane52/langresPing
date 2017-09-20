<?php
//connexion bdd
require_once('connectionBdd.php');

$date = date('Y-m-d');

$requete = "SELECT * FROM calendrier WHERE date_event>=?";
$sql = $bdd->prepare($requete);
$sql->execute(array($date));

while($donnees = $sql->fetch()){
$tab[] = array('id' => $donnees['id_calendrier'],
		  'title' => $donnees['titre'],
		  'start' => $donnees['date_event']. " " .$donnees['heure'],
		 'allDay' => false);
}
 
echo json_encode($tab);

