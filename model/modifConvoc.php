<?php

if(isset($_POST['sendConvoc']) && !empty($_POST['equipeConvoc']) && !empty($_POST['adversaireConvoc']) && isset($_POST['lieu']) && !empty($_POST['dateConvoc']) && !empty($_POST['heureConvoc']) && isset($_POST['joueur'])){
    //connexion bdd
    require_once('connectionBdd.php');

    $equipe = htmlspecialchars($_POST['equipeConvoc']);
    $equipeSansQuote = str_replace("'", " ", $equipe);

    $adversaire = htmlspecialchars($_POST['adversaireConvoc']);
    $adversaireSansQuote = str_replace("'", " ", $adversaire);

    if($_POST['lieu'] == "domicile"){
        $lieu = "à domicile";
    }
    else{
        $lieu = "à l\'exterieur";
    }
    $commentaire = htmlspecialchars($_POST['commentaireConvoc']); 
    $commentaireSansQuote = str_replace("'", " ", $commentaire);

    //passage du format francais à anglais
    $dateFr=htmlspecialchars($_POST['dateConvoc']);
    $dateExplode = explode("-", $dateFr);
    $dateUs=$dateExplode[2].'-'.$dateExplode[1].'-'.$dateExplode[0];

    $heure = htmlspecialchars($_POST['heureConvoc']);

    $prenom1 = htmlspecialchars($_POST['prenomConvoc1']);
    $prenom1SansQuote = str_replace("'", " ", $prenom1);

    $prenom2 = htmlspecialchars($_POST['prenomConvoc2']);
    $prenom2SansQuote = str_replace("'", " ", $prenom2);

    $prenom3 = htmlspecialchars($_POST['prenomConvoc3']);
    $prenom3SansQuote = str_replace("'", " ", $prenom3);

    $prenom4 = htmlspecialchars($_POST['prenomConvoc4']);
    $prenom4SansQuote = str_replace("'", " ", $prenom4);

    $nom1 = htmlspecialchars($_POST['nomConvoc1']);
    $nom1SansQuote = str_replace("'", " ", $nom1);

    $nom2 = htmlspecialchars($_POST['nomConvoc2']);
    $nom2SansQuote = str_replace("'", " ", $nom2);

    $nom3 = htmlspecialchars($_POST['nomConvoc3']);
    $nom3SansQuote = str_replace("'", " ", $nom3);

    $nom4 = htmlspecialchars($_POST['nomConvoc4']);
    $nom4SansQuote = str_replace("'", " ", $nom4);

    $requete = "INSERT INTO convoc VALUES (null, '$equipeSansQuote', '$adversaireSansQuote', '$lieu', '$commentaireSansQuote', '$dateUs', '$heure', '$prenom1SansQuote', '$prenom2SansQuote', '$prenom3SansQuote', '$prenom4SansQuote', '$nom1SansQuote', '$nom2SansQuote', '$nom2SansQuote', '$nom2SansQuote')";
    //echo $requete;
    $bdd->exec($requete);
    session_start();
    $_SESSION['messageConvoc'] = "Ajout convoc OK";
    header('location: ../vue/interfaceAdmin.php');
    exit();
}
else{
    session_start();
    $_SESSION['messageErreur'] = "Tu as oublié de cocher quelque chose!!!";
    header('location: ../vue/interfaceAdmin.php');
}
