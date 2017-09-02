<?php

if(isset($_POST['sendConvoc']) && !empty($_POST['equipeConvoc']) && !empty($_POST['adversaireConvoc']) && !empty($_POST['heureConvoc'])){
    //connexion bdd
    require_once('connectionBdd.php');

    $equipe = htmlspecialchars($_POST['equipeConvoc']);
    $adversaire = htmlspecialchars($_POST['adversaireConvoc']);
    if($_POST['lieu'] == "domicile"){
        $poste = "A domicile";
    }
    else{
        $poste = "A l'exterieur";
    }
    $commentaire = htmlspecialchars($_POST['commentaireConvoc']);    
    $jour = $_POST['jour'];
    switch ($jour) {
        case 'jour1':
            $jour = 1;
            break;
        case 'jour2':
            $jour = 2;
            break;
        case 'jour3':
            $jour = 3;
            break;
        case 'jour4':
            $jour = 4;
            break;
        case 'jour5':
            $jour = 5;
            break;
        case 'jour6':
            $jour = 6;
            break;
        case 'jour7':
            $jour = 7;
            break;
        case 'jour8':
            $jour = 8;
            break;
        case 'jour9':
            $jour = 9;
            break;
        case 'jour10':
            $jour = 10;
            break;
        case 'jour11':
            $jour = 11;
            break;
        case 'jour12':
            $jour = 12;
            break;
        case 'jour13':
            $jour = 13;
            break;
        case 'jour14':
            $jour = 14;
            break;
        case 'jour15':
            $jour = 15;
            break;
        case 'jour16':
            $jour = 16;
            break;
        case 'jour17':
            $jour = 17;
            break;
        case 'jour18':
            $jour = 18;
            break;
        case 'jour19':
            $jour = 19;
            break;
        case 'jour20':
            $jour = 20;
            break;
        case 'jour21':
            $jour = 21;
            break;
        case 'jour22':
            $jour = 22;
            break;
        case 'jour23':
            $jour = 23;
            break;
        case 'jour24':
            $jour = 24;
            break;
        case 'jour25':
            $jour = 25;
            break;
        case 'jour26':
            $jour = 26;
            break;
        case 'jour27':
            $jour = 27;
            break;
        case 'jour28':
            $jour = 28;
            break;
        case 'jour29':
            $jour = 29;
            break;
        case 'jour30':
            $jour = 30;
            break;
        case 'jour31':
            $jour = 31;
            break;           
    }
    $mois = $_POST['mois'];
    switch ($mois) {
        case 'mois1':
            $mois = 'janvier';
            break;
        case 'mois2':
            $mois = 'fevrier';
            break;
        case 'mois3':
            $mois = 'mars';
            break;
        case 'mois4':
            $mois = 'avril';
            break;
        case 'mois5':
            $mois = 'mai';
            break;
        case 'mois6':
            $mois = 'juin';
            break;
        case 'mois7':
            $mois = 'juillet';
            break;
        case 'mois8':
            $mois = 'aout';
            break;
        case 'mois9':
            $mois = 'septembre';
            break;
        case 'mois10':
            $mois = 'octobre';
            break;
        case 'mois11':
            $mois = 'novembre';
            break;
        case 'mois12':
            $mois = 'decembre';
            break;
    }
    $heure = htmlspecialchars($_POST['heureConvoc']);
    $prenom1 = htmlspecialchars($_POST['prenomConvoc1']);
    $prenom2 = htmlspecialchars($_POST['prenomConvoc2']);
    $prenom3 = htmlspecialchars($_POST['prenomConvoc3']);
    $prenom4 = htmlspecialchars($_POST['prenomConvoc4']);
    $nom1 = htmlspecialchars($_POST['nomConvoc1']);
    $nom2 = htmlspecialchars($_POST['nomConvoc2']);
    $nom3 = htmlspecialchars($_POST['nomConvoc3']);
    $nom4 = htmlspecialchars($_POST['nomConvoc4']);

    $requete = "INSERT INTO convoc VALUES (null, '$equipe', '$adversaire', '$poste', '$commentaire', $jour, '$mois', '$heure', '$prenom1', '$prenom2', '$prenom3', '$prenom4', '$nom1', '$nom2', '$nom3', '$nom4')";
    echo $requete;
    $bdd->exec($requete);
    session_start();
    $_SESSION['messageConvoc'] = "Ajout convoc OK";

    header('location: ../vue/interfaceAdmin.php');
}
else{
    header('location: ../vue/interfaceAdmin.php');
}