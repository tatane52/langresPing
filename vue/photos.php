<!doctype html>
<html lang="fr">
<head>
    <title>articles</title>
    <meta charset="utf_8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../photos.css">
</head>
<body>
<?php
//inclusion d'entête php
include('enTeteAnnexe.php');
//fin inclusion

require_once('../model/connectionBdd.php');

$requete = "SELECT cheminPhoto FROM photo ORDER BY id_photo DESC";
$result = $bdd->query($requete);
while($donnees = $result->fetch()){
    ?>   
    <div class="thumbnail text-center">
        <img src="<?php echo $donnees['cheminPhoto'];?>" alt="..."/>   
    </div>
    <?php
    }
    ?>
  
</body>
</html>