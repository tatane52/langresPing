<?php

require_once('connectionBdd.php');
$requete = "SELECT * FROM calendrier WHERE id_calendrier=3";
$result = $bdd->query($requete);

$madate = "2017-09-30";
$monheure = "08:00";
$date = strtotime("$madate $monheure");

while($donnees = $result->fetch()){
$tab[] = array('id' => 3,//$donnees['id_calendrier'],
		  'title' => $donnees['titre'],
		  'start' => $date,
		 'allDay' => false);
}
 
echo json_encode($tab);

