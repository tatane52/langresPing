<?php
require_once('connectionBdd.php');


$nom = htmlentities($_POST['nom']);
echo $nom. "</br>";

$prenom = htmlentities($_POST['prenom']);
echo $prenom. "</br>";

$mdp = htmlentities($_POST['mdp']);
echo $mdp. "</br>";
$mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

$mdpConfirm = htmlentities($_POST['confirmMdp']);
echo $mdpConfirm. "</br>";

$pseudo = htmlentities($_POST['pseudo']);
echo $pseudo. "</br>";

$mail = htmlentities($_POST['mail']);
echo $mail. "</br>";

$date = date("Y-m-d");

$requete = "INSERT INTO membre (id_membre, nom, prenom, pseudo, mail, mdp, date_inscription)
            VALUES (null, '$nom', '$prenom', '$pseudo', '$mail', '$mdpHash', '$date')";
echo $requete;
$bdd->exec($requete);


?>
