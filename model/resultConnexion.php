<?php

if(isset($_POST['send'])){

    require_once('connectionBdd.php');
    
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    
    $requete = "SELECT * FROM membre WHERE pseudo='" .$pseudo. "'";
    
    $result = $bdd->query($requete);
    
    $donnees = $result->fetch();
      
    if(password_verify($mdp, $donnees['mdp'])){
        session_start();
        $_SESSION['pseudo'] = $pseudo;
        header('location: ../vue/espaceMembre.php');
        exit();
    }
    else{
        session_start();
        $_SESSION['erreur'] = "le pseudo et/ou le mot de passe n'est pas correct";
        header('location: ../vue/connexion.php');
    }
};
