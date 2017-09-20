<?php
//connexion bdd
require_once('connectionBdd.php');

$pseudo = $_GET["pseudo"];
$requete = "SELECT pseudo FROM membre WHERE pseudo=?";
$sql = $bdd->prepare($requete);
$sql->execute(array($pseudo));

while ($donnee = $sql->fetch()) {  
    if ($donnee['pseudo'] == $pseudo) {
        echo true;
        return;
    }
}    

