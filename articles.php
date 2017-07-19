<!doctype html>
<html lang="fr">
<head>
    <title>articles</title>
    <meta charset="utf_8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="articles.css">
</head>
<body>
<?php
//inclusion d'entête php
include('enTeteAnnexe.php');
//fin inclusion

require_once('connectionBdd.php');

$requete = "SELECT photo,titre,contenu FROM article ORDER BY id_article DESC";
$result = $bdd->query($requete);
    while($donnees = $result->fetch()){
        ?>   
        <div class="thumbnail text-center">
            <img src="<?php echo $donnees['photo'];?>" alt="..."/>   
            <div class="caption">
                <h3 class="colorBlue">
                <?php 
                echo $donnees["titre"];                        
                ?>
                </h3>
                <p class="text-center">
                <?php
                echo $donnees["contenu"];
                ?>
                </p>
            </div>
        </div>
    <?php
    }
    ?>
  
</body>


