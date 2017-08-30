<?php

$requete = "SELECT cheminPhoto FROM photo ORDER BY id_photo DESC LIMIT 2,1";
$result = $bdd->query($requete);
$donnees = $result->fetch();