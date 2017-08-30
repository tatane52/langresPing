<?php

$requete = "SELECT date_envoi FROM article ORDER BY id_article DESC LIMIT 1";
$result = $bdd->query($requete);         
$donnees = $result->fetch();
$date = new DateTime($donnees["date_envoi"]);
$dateFormat = date_format($date, 'd-m-Y');
echo $dateFormat;