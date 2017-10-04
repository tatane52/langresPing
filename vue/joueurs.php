<!doctype html>
<html lang="fr">
<head>
    <title>articles</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/joueurs.css">
</head>
<body>
<?php
//inclusion d'entête php
include('enTeteAnnexe.php');

//connexion bdd
require_once('../model/connectionBdd.php');

//requete * joueur
require_once('../model/traitementJoueurComplet.php');
while($donnees = $result->fetch()){
    ?>   
    <div class="thumbnail text-center">
        <img src="<?php echo $donnees['photo'];?>" alt="joueurs loisir et competition"/>
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