<?php

if(isset($_POST['sendTitre']) && !empty($_POST['mainTitle'])){
    require_once('connectionBdd.php');
    $titre = htmlentities($_POST['mainTitle']);
    $titreMajuscule = strtoupper($titre);
    $requete = "INSERT INTO site VALUES (null, '$titreMajuscule')";
    $bdd->exec($requete);
    header('location: interfaceAdmin.php');
}
else{
    header('location: interfaceAdmin.php');
}
?>