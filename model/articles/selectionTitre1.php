<?php

$requete = "SELECT titre FROM article ORDER BY id_article DESC LIMIT 1";
$result = $bdd->query($requete);         
$donnees = $result->fetch();
echo $donnees["titre"];

