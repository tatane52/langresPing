<?php

$requete = "SELECT nom FROM bureau WHERE poste='TRESORIER' ORDER BY id_bureau DESC";
$result = $bdd->query($requete);
$donnees = $result->fetch();
echo $donnees['nom'];