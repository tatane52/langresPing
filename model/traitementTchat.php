<?php
session_start();

    require_once('connectionBdd.php');

    $date_envoi = date('Y-m-d H:i:s');
    $message = $_POST["messageAjax"];

    $id = $_SESSION['id_membre'];
    $requeteInsert = "INSERT INTO message VALUES(null, '$message', '$date_envoi', $id)";
    $bdd->exec($requeteInsert);

    //$requete = "SELECT * FROM message WHERE id_message > '" .$_POST["idMessage"]."' ORDER BY id_message DESC";
    $requete = "SELECT date_envoi, pseudo, id_message, contenu FROM membre INNER JOIN message
    ON membre.id_membre = message.id_membre WHERE id_message > '" .$_POST["idMessage"]."' 
    ORDER BY id_message DESC";
    $result = $bdd->query($requete);

    while($donnees = $result->fetch()) {
        $date_message = new Datetime($donnees['date_envoi']);  
        $dateFormat = date_format($date_message, 'd-m-Y H:i');
        if($donnees['pseudo'] == $_SESSION['pseudo']){
            echo "<p id='" .$donnees['id_message']."' class='text-left'><span class='pseudoMoi'>" .$donnees['pseudo'].
             "</span> : le " .$dateFormat. "</br>"
            .$donnees['contenu']."</p>";
        }
        else{
            echo "<p id='" .$donnees['id_message']. "' class='text-right'><span class='pseudoAutre'>" .$donnees['pseudo'].
             "</span> : le " .$dateFormat. "</br>"
            .$donnees['contenu']."</p>";
        }
    }


