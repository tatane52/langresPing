<!doctype html>
<html lang="fr">
<head>
    <title>articles</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/photos.css">
</head>
<body>
<?php
//inclusion d'entête php
include('enTeteAnnexe.php');
//fin inclusion

//connexion bdd
require_once('../model/connectionBdd.php');

//requete chemin photo
require_once('../model/photos/traitementPhotoChemin.php');
while($donnees = $result->fetch()){
    ?>   
    <div class="thumbnail text-center">
        <img src="<?php echo "../" .$donnees['cheminPhoto'];?>" alt="photo du club"/>   
    </div>
    <?php
    }
    ?>
  
</body>
</html>