<?php

if(isset($_POST['deleteJoueur'])){
    require_once('connectionBdd.php');

    $valeur = $_POST['nomDeleteJoueur'];

    $requete = "DELETE FROM joueur WHERE id_joueur=$valeur";
    $bdd->query($requete);
    session_start();
    $_SESSION['deleteJoueur'] = "Joueur supprimé";
    header('location:../model/interfaceAdmin.php');
    
}
else {
   header('location:../model/interfaceAdmin.php');
}