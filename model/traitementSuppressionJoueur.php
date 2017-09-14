<?php

if(isset($_POST['deleteJoueur'])){
    require_once('connectionBdd.php');

    $valeur = $_POST['nomDeleteJoueur'];

    $requete = "DELETE FROM joueur WHERE id_joueur=$valeur";
    $bdd->query($requete);
    session_start();
    $_SESSION['deleteJoueur'] = "Joueur supprimé";
    header('location:../vue/interfaceAdmin.php');
    
}
else {
   header('location:../vue/interfaceAdmin.php');
}