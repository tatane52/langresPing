<?php

$requete = "SELECT * FROM gymnase ORDER BY id_gymnase DESC LIMIT 1";
$result = $bdd->query($requete);                    
$donnees = $result->fetch();
echo $donnees['nom']. ", " .$donnees['adresse']. ", ".$donnees['code_postal']. " " .$donnees['ville'];
                        