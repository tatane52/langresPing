<?php

$requete = "SELECT tel FROM bureau WHERE poste='PRESIDENT' ORDER BY id_bureau DESC";
$result = $bdd->query($requete);
$donnees = $result->fetch();
echo $donnees['tel'];