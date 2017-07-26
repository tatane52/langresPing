<!doctype html>
<html lang="fr">
<head>
    <title>articles</title>
    <meta charset="utf_8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="joueurs.css">
</head>
<body>
<?php
//inclusion d'entête php
include('enTeteAnnexe.php');
//fin inclusion

require_once('connectionBdd.php');

$requete = "SELECT * FROM joueur ORDER BY id_joueur DESC";
$result = $bdd->query($requete);
while($donnees = $result->fetch()){
    ?>   
    <div class="thumbnail text-center">
        <img src="<?php echo $donnees['photo'];?>" alt="..."/>
        <p class="text-center"> 
        <?php 
        echo $donnees['nom']. " " .$donnees['prenom'];
        ?>
        </p> 
    </div>
    <?php
    }
    ?>
  
</body>
</html>