<?php


if(isset($_POST['send']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mdp']) && !empty($_POST['confirmMdp']) && !empty($_POST['pseudo']) && !empty($_POST['mail'])){
    //connexion bdd
    require_once('connectionBdd.php');
    $nom = htmlspecialchars($_POST['nom']);
    $accents = array('é', 'è', 'ê', 'ë', 'ï', 'î', 'ô', 'ö', 'à', 'â', 'ä', 'û', 'ü', 'ù', 'ç', '\'');
    $accentsMaj = array('E', 'E', 'E', 'E', 'I', 'I', 'O', 'O', 'A', 'A', 'A', 'U', 'U', 'U', 'C', ' ');
    $nomSansAccent = str_replace($accents, $accentsMaj, $nom);  
    $nomMaj = strtoupper($nomSansAccent);
    
    $prenom = htmlspecialchars($_POST['prenom']);
    $prenomSansQuote = str_replace("'", " ", $prenom);
    
    $mdp = htmlspecialchars($_POST['mdp']);

    //hachage du mdp
    $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

    $pseudo = htmlspecialchars($_POST['pseudo']);
    $pseudoSansQuote = str_replace("'", " ", $pseudo);

    $mail = htmlspecialchars($_POST['mail']);

    $date = date("Y-m-d");

    $requete = "INSERT INTO membre VALUES (null, ?, ?, ?, ?, ?, ?)";
    $sql = $bdd->prepare($requete);
    $sql->execute(array($nomMaj, $prenomSansQuote, $pseudoSansQuote, $mail, $mdpHash, $date));

    session_start();
    $_SESSION['messageInscription'] = "Félicitation " .$pseudo.", tu fais parti de nos membres!!!";

    header('location: ../index.php');
}
else {
    session_start();
    $_SESSION['messageInscriptionErreur'] = "Tu as oublié de rentrer quelque chose!!!";

    header('location: ../index.php');
}



