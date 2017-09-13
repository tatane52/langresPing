<?php

if(isset($_POST['send']) && !empty($_POST['pseudo']) && !empty($_POST['mdp'])){

    require_once('connectionBdd.php');
    
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $pseudoSansQuote = str_replace("'", " ", $pseudo);

    $mdp = htmlspecialchars($_POST['mdp']);
    
    $requete = "SELECT * FROM membre WHERE pseudo='" .$pseudoSansQuote. "'";
    
    $result = $bdd->query($requete);
    
    $donnees = $result->fetch();
      
    if(password_verify($mdp, $donnees['mdp'])){
        session_start();
        $_SESSION['pseudo'] = $pseudo;
        header('location: ../vue/1espace2Membre3.php');
        exit();
    }
    else{
        session_start();
        $_SESSION['erreur'] = "le pseudo et/ou le mot de passe n'est pas correct";
        header('location: ../vue/connexion.php');
    }
}

