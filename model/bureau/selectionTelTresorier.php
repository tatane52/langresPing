<?php

$requete = "SELECT tel FROM bureau WHERE poste='TRESORIER' ORDER BY id_bureau DESC";
$result = $bdd->query($requete);
$donnees = $result->fetch();
echo $donnees['tel'];