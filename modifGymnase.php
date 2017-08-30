<?php

if(isset($_POST['sendGymnase']) && !empty($_POST['nomGymnase']) && !empty($_POST['adresseGymnase']) && !empty($_POST['codeGymnase']) && !empty($_POST['villeGymnase'])){
    require_once('model/connectionBdd.php');

    $nom = htmlspecialchars($_POST['nomGymnase']);
    $accents = array('é', 'è', 'ê', 'ë', 'ï', 'î', 'ô', 'ö', 'à', 'â', 'ä', 'û', 'ü', 'ù', 'ç', '\'');
    $accentsMaj = array('E', 'E', 'E', 'E', 'I', 'I', 'O', 'O', 'A', 'A', 'A', 'U', 'U', 'U', 'C', ' ');
    $nomSansAccent = str_replace($accents, $accentsMaj, $nom);
    $nomMaj = strtoupper($nomSansAccent);
    

    $adresse = htmlspecialchars($_POST['adresseGymnase']);
    $adresseSansQuote = str_replace('\'', ' ', $adresse);

    $codePostal = $_POST['codeGymnase'];

    $ville = htmlspecialchars($_POST['villeGymnase']);
    $villeSansQuote = str_replace('\'', ' ', $ville);
    $villeMaj = ucfirst($villeSansQuote);

    $requete = "INSERT INTO gymnase VALUES (null, '$nomMaj', '$adresseSansQuote', '$codePostal', '$villeMaj')";
        //echo $requete;
        $bdd->exec($requete);

        session_start();
        $_SESSION['messageGymnase'] = "Ajout gymnase OK";

        header('location: interfaceAdmin.php');
        exit();
}
else{
    header('location: interfaceAdmin.php');
    exit();
}
?>