<?php
require_once('connectionBdd.php');

$requete = "SELECT * FROM tchat WHERE id_tchat > '" .$_GET["idMessage"]."' ORDER BY id_tchat DESC";
$result = $bdd->query($requete);

while($donnees = $result->fetch()) {
    $date_message = new Datetime($donnees['date_envoi']);  
    $dateFormat = date_format($date_message, 'd-m-Y H:i:s');
    if($donnees['pseudo'] == $_SESSION['pseudo']){
        echo "<p id='" .$donnees['id_tchat']."' class='text-left'><span class='pseudoMoi'>" .$donnees['pseudo']. "</span> : le " .$dateFormat. "</br>"
        .$donnees['message']."</p>";
    }
    else{
        echo "<p id='" .$donnees['id_tchat']. "' class='text-right'><span class='pseudoAutre'>" .$donnees['pseudo']. "</span> : le " .$dateFormat. "</br>"
        .$donnees['message']."</p>";
    }
    
}   

$madate = "2017-09-01";
$monheure = "08:00";
$start_date = strtotime("$madate $monheure");
$end_date   = strtotime("$madate $monheure +2 hours"); // Date de début + 2h

$tab[] = array('id'        => $ligne['id'],
		  'title'     => $ligne['title'],
		  'start'     => $start_date,
		 'end'       => $end_date,
		 'allDay'    => false,
		 'url'       => "#");

 
echo json_encode($tab);