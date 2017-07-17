<?php
if(isset($_POST['sendTitre']) && !empty($_POST['mainTitle'])){
    require_once('connectionBdd.php');
    $titre = htmlspecialchars($_POST['mainTitle']);
    $caracteresSpeciaux = ['é', 'è', 'ê', 'ë', 'ï', 'î', 'à', 'â', 'ä', 'û', 'ü', 'ù', 'ô', 'ö', 'ç'];
    $caracteresSpeciauxMaj = ['E', 'E', 'E', 'E', 'I', 'I', 'A', 'A', 'A', 'U', 'U', 'U', 'O', 'O', 'C'];
    //attention str_replace ne fonctionne pas avec htmlentities
    $titreSansCaracSpeciaux = str_replace($caracteresSpeciaux, $caracteresSpeciauxMaj, $titre);
    $titreMajuscule = strtoupper($titreSansCaracSpeciaux);
    $requete = "INSERT INTO site VALUES (null, '$titreMajuscule')";
    $bdd->exec($requete);
    header('location: interfaceAdmin.php');
    exit();
}
else{
    header('location: interfaceAdmin.php');
    exit();
}
?>
