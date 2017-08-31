<?php


if(isset($_POST['send']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mdp']) && !empty($_POST['confirmMdp']) && !empty($_POST['pseudo']) && !empty($_POST['mail'])){

    require_once('connectionBdd.php');
    $nom = htmlentities($_POST['nom']);

    $prenom = htmlentities($_POST['prenom']);

    $mdp = htmlentities($_POST['mdp']);

    //hachage du mdp
    $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

    $pseudo = htmlentities($_POST['pseudo']);

    $mail = htmlentities($_POST['mail']);

    $date = date("Y-m-d");

    $requete = "INSERT INTO membre (id_membre, nom, prenom, pseudo, mail, mdp, date_inscription)
            VALUES (null, '$nom', '$prenom', '$pseudo', '$mail', '$mdpHash', '$date')";
    
    $bdd->exec($requete);

    session_start();
    $_SESSION['messageInscription'] = "Félicitation " .$pseudo.", tu fais parti de nos membres!!!";

    header('location: ../vue/langres.php');
}



