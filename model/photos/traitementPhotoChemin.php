<?php

$requete = "SELECT cheminPhoto FROM photo ORDER BY id_photo DESC";
$result = $bdd->query($requete);
