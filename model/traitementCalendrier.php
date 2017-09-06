<?php

require_once('connectionBdd.php');

$date = date('Y-m-d');
//echo $date;
/*$dateCreate = date_create($date);
$dateFormat = date_format($dateCreate, 'd-m-Y');
echo $dateFormat;*/

$requete = "SELECT * FROM calendrier WHERE date>='$date'";
$result = $bdd->query($requete);

while($donnees = $result->fetch()){
$tab[] = array('id' => $donnees['id_calendrier'],
		  'title' => $donnees['titre'],
		  'start' => $donnees['date']. " " .$donnees['heure'],
		 'allDay' => false);
}
 
echo json_encode($tab);

