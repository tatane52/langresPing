<?php
require_once('connectionBdd.php');


$requete = "SELECT pseudo FROM membre WHERE pseudo='" .$_GET["pseudo"]."'";
$result = $bdd->query($requete);

while ($donnee = $result->fetch()) {  
    if ($donnee['pseudo'] == $_GET['pseudo']) {
        echo true;
        return;
    }
}    

?>