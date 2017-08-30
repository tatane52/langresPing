<?php
session_start();
require_once('model/connectionBdd.php');

$date_envoi = date('Y-m-d H:i:s');
$message = $_POST["messageAjax"];
$pseudo = $_SESSION["pseudo"];
$requeteInsert = "INSERT INTO tchat VALUES(null, '$message', '$pseudo', '$date_envoi')";

$bdd->exec($requeteInsert);

$requete = "SELECT * FROM tchat WHERE id_tchat > '" .$_POST["idMessage"]."' ORDER BY id_tchat DESC";
$result = $bdd->query($requete);

while($donnees = $result->fetch()) {
    $date_message = new Datetime($donnees['date_envoi']);  
    $dateFormat = date_format($date_message, 'd-m-Y H:i');
    if($donnees['pseudo'] == $_SESSION['pseudo']){
        echo "<p id='" .$donnees['id_tchat']."' class='text-left'><span class='pseudoMoi'>" .$donnees['pseudo']. "</span> : le " .$dateFormat. "</br>"
        .$donnees['message']."</p>";
    }
    else{
        echo "<p id='" .$donnees['id_tchat']. "' class='text-right'><span class='pseudoAutre'>" .$donnees['pseudo']. "</span> : le " .$dateFormat. "</br>"
        .$donnees['message']."</p>";
    }
    
}   

?>