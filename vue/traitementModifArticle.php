<?php

if(isset($_POST['updateArticle'])){
    //connexion bdd
    require_once('../model/connectionBdd.php');

    $numeroArticle = $_POST['nomUpdateArticle'];

    $requete = "SELECT * FROM article WHERE id_article=?";
    $sql = $bdd->prepare($requete);
    $sql->execute(array($numeroArticle));
    $donnees = $sql->fetch();

    session_start();
    $_SESSION['id'] = $donnees['id_article'];
?>
<!doctype html>
<html lang="fr">
<head>
    <title>Modif articles</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/articles.css">
</head>
<body>
<?php
//inclusion d'entête php
include('enTeteAnnexe.php');
    echo "<form action='../model/updateTraitementArticle.php' method='post' enctype='multipart/form-data'>
        <fieldset class='col-xs-offset-1 col-xs-10'>
            <legend class='text-center'>Ajouter article</legend>    
                <div class='form-group>
                    <label for='title'>Titre</label>
                    <input type='text' value='" .$donnees['titre']. "' name='title' class='form-control' id='title' maxlength='50' required>
                </div>
                <div class='form-group'>
                    <label for='contenu'>Contenu</label>
                    <textarea name='contenu' class='form-control' id='contenu' required> ".$donnees['contenu']." </textarea>
                </div>
                <div class='form-group'>
                    <label for='photoArticle'>Photo (par défaut logo du club)</label>
                    <input type='file' name='photoArticle' class='form-control' id='photoArticle'>
                </div>
                <div>
                    <button type='submit' name='sendArticle' class='btn col-xs-offset-4 col-xs-4'>Ajouter</button>
                </div>            
         </fieldset>
    </form>";
}
?>
</body>
</html>