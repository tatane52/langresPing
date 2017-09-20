<?php

if(isset($_POST['send']) && !empty($_POST['pseudo']) && !empty($_POST['mdp'])){
    //connexion bdd
    require_once('connectionBdd.php');
    
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $pseudoSansQuote = str_replace("'", " ", $pseudo);

    
    
    $requete = "SELECT * FROM membre WHERE pseudo=?";
    
    $sql = $bdd->prepare($requete);
    $sql->execute(array($pseudoSansQuote));
    
    $donnees = $sql->fetch();

    $mdp = htmlspecialchars($_POST['mdp']);
    //vérification mot de passe rentré par membre en clair
    //comparé au mot de passe haché en bdd
    if(password_verify($mdp, $donnees['mdp'])){
        session_start();
        $_SESSION['id_membre'] = $donnees['id_membre'];
        $_SESSION['pseudo'] = $donnees['pseudo'];
        header('location: ../vue/1espace2Membre3.php');
        exit();
    }
    else{
        session_start();
        $_SESSION['erreur'] = "le pseudo et/ou le mot de passe n'est pas correct";
        header('location: ../vue/connexion.php');
    }
}

