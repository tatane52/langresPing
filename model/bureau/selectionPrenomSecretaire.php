<?php

$requete = "SELECT prenom FROM bureau WHERE poste='SECRETAIRE' ORDER BY id_bureau DESC";
$result = $bdd->query($requete);
$donnees = $result->fetch();
echo $donnees['prenom'];