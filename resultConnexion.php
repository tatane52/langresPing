<?php

if(isset($_POST['send'])){

    require_once('model/connectionBdd.php');
    
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    
    $requete = "SELECT * FROM membre WHERE pseudo='" .$pseudo. "'";
    
    $result = $bdd->query($requete);
    
    $donnees = $result->fetch();
      
    if(password_verify($mdp, $donnees['mdp'])){
        session_start();
        $_SESSION['pseudo'] = $pseudo;
        header('location: espaceMembre.php');
        exit();
    }
    else{
        header('location: connexion.php');
    }
};
?>