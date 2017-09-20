<?php

if(isset($_POST['deleteJoueur'])){
    //connexion bdd
    require_once('connectionBdd.php');

    $valeur = $_POST['nomDeleteJoueur'];

    $requete = "DELETE FROM joueur WHERE id_joueur=?";
    $sql = $bdd->prepare($requete);
    $sql->execute(array($valeur));

    session_start();
    $_SESSION['deleteJoueur'] = "Joueur supprimé";
    header('location:../vue/interfaceAdmin.php');
    
}
else {
   header('location:../vue/interfaceAdmin.php');
}