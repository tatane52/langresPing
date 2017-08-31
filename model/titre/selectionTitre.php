<?php 

    $requete = "SELECT titre FROM site ORDER BY id_site DESC LIMIT 1";
    $result = $bdd->query($requete);                    
    $donnees = $result->fetch();
    echo $donnees["titre"];
