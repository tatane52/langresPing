<?php

if(isset($_POST['sendTitre']) && !empty($_POST['mainTitle'])){
    //connexion bdd
    require_once('connectionBdd.php');
    //titre formulaire
    $titre = htmlspecialchars($_POST['mainTitle']);
    $caracteresSpeciaux = ['é', 'è', 'ê', 'ë', 'ï', 'î', 'à', 'â', 'ä', 'û', 'ü', 'ù', 'ô', 'ö', 'ç', '\''];
    $caracteresSpeciauxMaj = ['E', 'E', 'E', 'E', 'I', 'I', 'A', 'A', 'A', 'U', 'U', 'U', 'O', 'O', 'C', ' '];
    //attention str_replace ne fonctionne pas avec htmlentities
    $titreSansCaracSpeciaux = str_replace($caracteresSpeciaux, $caracteresSpeciauxMaj, $titre);
    $titreMajuscule = strtoupper($titreSansCaracSpeciaux);

    $requete = "INSERT INTO site VALUES (null, ?)";
    $sql = $bdd->prepare($requete);
    $sql->execute(array($titreMajuscule));

    session_start();
    $_SESSION['messageTitre'] = "Changement titre OK";

    header('location: ../vue/interfaceAdmin.php');
    exit();
}
else{
    header('location: ../vue/interfaceAdmin.php');
    
}


