<!doctype html>
<html lang="fr">
<head>
    <title>articles</title>
    <meta charset="utf_8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/articles.css">
</head>
<body>
<?php
//inclusion d'entête php
include('enTeteAnnexe.php');


//connexion bdd
require_once('../model/connectionBdd.php');

//requette * article
require_once('../model/articles/traitementArticleComplet.php');
while($donnees = $result->fetch()){
        ?>   
        <div class="thumbnail text-center">
            <img src="<?php echo "../" .$donnees['photo'];?>" alt="article bb langres"/>   
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
                <p class="text-center">
                <?php
                //requete date article
                require_once('../model/articles/traitementArticleDate.php');
                ?>
                </p>
            </div>
        </div>
    <?php
    }
    ?>
  
</body>
</html>


