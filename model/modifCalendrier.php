<?php

if(isset($_POST['sendCalendrier']) && !empty($_POST['dateCalendrier']) && !empty($_POST['heureCalendrier']) && !empty($_POST['titreCalendrier'])){
    //connexion bdd
    require_once('connectionBdd.php');

    //passage du format francais à anglais
    $dateFr=htmlspecialchars($_POST['dateCalendrier']);
    $dateExplode = explode("-", $dateFr);
    $dateUs=$dateExplode[2].'-'.$dateExplode[1].'-'.$dateExplode[0];

    $heure = htmlspecialchars($_POST['heureCalendrier']);
    $titre = htmlspecialchars($_POST['titreCalendrier']);
    $titreSansQuote = str_replace("'", " ", $titre);

    $requete = "INSERT INTO calendrier VALUES (null, '$dateUs', '$heure', '$titreSansQuote')";
    $bdd->exec($requete);

    session_start();
    $_SESSION['messageCalendrier'] = "Ajout évènement OK";

    header('location: ../vue/interfaceAdmin.php');
    exit();
}
else{
    header('location: ../vue/interfaceAdmin.php');
    
}
