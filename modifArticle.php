<?php

if(isset($_POST['sendArticle']) && !empty($_POST['title']) && !empty($_POST['contenu'])){
    require_once('connectionBdd.php');

    $titre = htmlentities($_POST['title']);
    $titreMajuscule = strtoupper($titre);

    $contenu = htmlentities($_POST['contenu']);

    
    $requete = "INSERT INTO article VALUES (null, '$titreMajuscule', '$contenu', '$photo')";
    $bdd->exec($requete);
    echo $requete;
    //header('location: interfaceAdmin.php');
}
else{
    header('location: interfaceAdmin.php');
}
?>