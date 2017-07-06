<?php 
require_once('connectionBdd.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>interface administrateur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css" />
</head>

<body>
    <!--inclusion d'entête php-->
    <?php include('enTeteAnnexe.php'); ?>
    <!--fin inclusion-->

   
    <form action="modifTitre.php" method="post">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Ajouter titre principal</legend>    
                <div class="form-group">
                    <label for="mainTitle">Titre</label>
                    <input type="text" name="mainTitle" class="form-control" id="mainTitle">
                </div>
                <div>
                    <button type="submit" name="sendTitle" class="btn col-xs-offset-4 col-xs-4">Ajouter</button>
                </div>            
         </fieldset>
    </form>
    

    <form action="modifArticle.php" method="post" enctype="multipart/form-data">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Ajouter article</legend>    
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" name="title" class="form-control" id="title" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="contenu">Contenu</label>
                    <input type="text" name="contenu" class="form-control" id="contenu">
                </div>
                <div class="form-group">
                    <label for="photoArticle">Photo (par défaut logo du club)</label>
                    <input type="file" name="photoArticle" class="form-control" id="photoArticle">
                </div>
                <div>
                    <button type="submit" name="sendArticle" class="btn col-xs-offset-4 col-xs-4">Ajouter</button>
                </div>            
         </fieldset>
    </form>

    <form action="modifPhoto.php" method="post" enctype="multipart/form-data">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Ajouter photo</legend>    
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" class="form-control" id="photo">
                </div>
                <div>
                    <button type="submit" name="sendPhoto" class="btn col-xs-offset-4 col-xs-4">Ajouter</button>
                </div>            
         </fieldset>
    </form>

    <form action="modifBureau.php" method="post" enctype="multipart/form-data">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Ajouter bureau</legend>    
                <div class="form-group">
                    <label for="nomBureau">Nom</label>
                    <input type="text" name="nomBureau" class="form-control" id="nomBureau" maxlength="20">
                </div>
                <div class="form-group">
                    <label for="prenomBureau">Prénom</label>
                    <input type="text" name="prenomBureau" class="form-control" id="prenomBureau" maxlength="20">
                </div>
                <div class="form-group">
                    <label>Poste</label></br>
                    <input type= "radio" name="poste" value="president"> Président
                    <input type= "radio" name="poste" value="tresorier"> Trésorier
                    <input type= "radio" name="poste" value="secretaire"> Secrétaire
                </div>
                <div class="form-group">
                    <label for="telBureau">Téléphone</label>
                    <input type="phone" name="telBureau" class="form-control" id="telBureau">
                </div>
                <div class="form-group">
                    <label for="mailBureau">Email</label>
                    <input type="mail" name="mailBureau" class="form-control" id="mailBureau" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="photoArticle">Photo (par défaut logo du club)</label>
                    <input type="file" name="photoArticle" class="form-control" id="photoArticle">
                </div>
                <div>
                    <button type="submit" name="sendArticle" class="btn col-xs-offset-4 col-xs-4">Ajouter</button>
                </div>            
         </fieldset>
    </form>

    <form action="modifGymnase.php" method="post">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Ajouter gymnase</legend>    
                <div class="form-group">
                    <label for="nomGymnase">Nom de la salle</label>
                    <input type="text" name="nomGymnase" class="form-control" id="nomGymnase">
                </div>
                <div class="form-group">
                    <label for="adresseGymnase">Adresse</label>
                    <input type="text" name="adresseGymnase" class="form-control" id="adresseGymnase">
                </div>
                <div class="form-group">
                    <label for="codeGymnase">Code postal</label>
                    <input type="text" name="codeGymnase" class="form-control" id="codeGymnase">
                </div>
                <div class="form-group">
                    <label for="villeGymnase">Ville</label>
                    <input type="text" name="villeGymnase" class="form-control" id="villeGymnase">
                </div>
                <div>
                    <button type="submit" name="sendGymnase" class="btn col-xs-offset-4 col-xs-4">Ajouter</button>
                </div>            
         </fieldset>
    </form>


</body>
</html>
