<?php
session_start();

if(isset($_POST['send']) && !empty($_POST['message'])){
    require_once('connectionBdd.php');
    $pseudo = $_SESSION['pseudo'];
    $message = htmlentities($_POST['message']);
    $date_envoi = date('Y-m-d H:i:s');
    
    $requeteInsert = "INSERT INTO tchat VALUES (null, '$message', '$pseudo', '$date_envoi')";
    //echo $requeteInsert;

    $bdd->exec($requeteInsert);
    header('location: espaceMembre.php');
}
else{
    echo "il faut écrire un message!!!";
}
?>