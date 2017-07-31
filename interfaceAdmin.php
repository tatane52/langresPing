<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>interface administrateur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css" />
</head>

<body>
    <!--inclusion d'entête php-->
    <?php include('enTeteAnnexe.php'); ?>
    <!--fin inclusion-->

    
    <?php
    //message confirmation
    if ($_SESSION['messageTitre']){
        echo "<script>alert('" .$_SESSION['messageTitre']. "')</script>";
        session_destroy();
    }
    ?>

    <form action="modifTitre.php" method="post">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Ajouter titre principal</legend>    
                <div class="form-group">
                    <label for="mainTitle">Titre</label>
                    <input type="text" name="mainTitle" class="form-control" id="mainTitle" required>
                </div>
                <div>
                    <button type="submit" name="sendTitre" class="btn col-xs-offset-4 col-xs-4">Ajouter</button>
                </div>            
         </fieldset>
    </form>

    <?php
    //message confirmation
    if ($_SESSION['messageArticle']){
        echo "<script>alert('" .$_SESSION['messageArticle']. "')</script>";
        session_destroy();
    }
    ?>

    <form action="modifArticle.php" method="post" enctype="multipart/form-data">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Ajouter article</legend>    
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" name="title" class="form-control" id="title" maxlength="50" required>
                </div>
                <div class="form-group">
                    <label for="contenu">Contenu</label>
                    <input type="text" name="contenu" class="form-control" id="contenu" required>
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

    <?php
    //message confirmation
    if ($_SESSION['messagePhoto']){
        echo "<script>alert('" .$_SESSION['messagePhoto']. "')</script>";
        session_destroy();
    }
    ?>

    <form action="modifPhoto.php" method="post" enctype="multipart/form-data">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Ajouter photo caroussel</legend>    
                <div class="form-group">
                    <label for="photoCaroussel">Photo (par défaut logo du club)</label>
                    <input type="file" name="photoCaroussel" class="form-control" id="photoCaroussel">
                </div>
                <div>
                    <button type="submit" name="sendPhoto" class="btn col-xs-offset-4 col-xs-4">Ajouter</button>
                </div>            
         </fieldset>
    </form>

    <?php
    //message confirmation
    if ($_SESSION['messageBureau']){
        echo "<script>alert('" .$_SESSION['messageBureau']. "')</script>";
        session_destroy();
    }
    ?>

    <form action="modifBureau.php" method="post" enctype="multipart/form-data">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Ajouter bureau</legend>    
                <div class="form-group">
                    <label for="nomBureau">Nom</label>
                    <input type="text" name="nomBureau" class="form-control" id="nomBureau" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label for="prenomBureau">Prénom</label>
                    <input type="text" name="prenomBureau" class="form-control" id="prenomBureau" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label>Poste</label></br>
                    <input type="radio" name="poste" value="president" checked> Président
                    <input type="radio" name="poste" value="tresorier"> Trésorier
                    <input type="radio" name="poste" value="secretaire"> Secrétaire
                </div>
                <div class="form-group">
                    <label for="telBureau">Téléphone</label>
                    <input type="phone" name="telBureau" class="form-control" placeholder="ex : 0606060606" id="telBureau" pattern="^0[1-9][0-9]{8}$" required>
                </div>
                <div class="form-group">
                    <label for="mailBureau">Email</label>
                    <input type="mail" name="mailBureau" class="form-control" id="mailBureau" maxlength="50" pattern="^[a-z0-9.-_]+@[a-z0-9.-_]{2,}\.[a-z]{2,4}$" required>
                </div>
                <div class="form-group">
                    <label for="photoBureau">Photo (par défaut logo du club)</label>
                    <input type="file" name="photoBureau" class="form-control" id="photoBureau">
                </div>
                <div>
                    <button type="submit" name="sendBureau" class="btn col-xs-offset-4 col-xs-4">Ajouter</button>
                </div>            
         </fieldset>
    </form>

     <?php
    //message confirmation
    if ($_SESSION['messageGymnase']){
        echo "<script>alert('" .$_SESSION['messageGymnase']. "')</script>";
        session_destroy();
    }
    ?>

    <form action="modifGymnase.php" method="post">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Ajouter gymnase</legend>    
                <div class="form-group">
                    <label for="nomGymnase">Nom de la salle</label>
                    <input type="text" name="nomGymnase" class="form-control" id="nomGymnase" required>
                </div>
                <div class="form-group">
                    <label for="adresseGymnase">Adresse</label>
                    <input type="text" name="adresseGymnase" class="form-control" id="adresseGymnase" required>
                </div>
                <div class="form-group">
                    <label for="codeGymnase">Code postal</label>
                    <input type="text" name="codeGymnase" class="form-control" id="codeGymnase" pattern="^[0-9]{5}$" required>
                </div>
                <div class="form-group">
                    <label for="villeGymnase">Ville</label>
                    <input type="text" name="villeGymnase" class="form-control" id="villeGymnase" required>
                </div>
                <div>
                    <button type="submit" name="sendGymnase" class="btn col-xs-offset-4 col-xs-4">Ajouter</button>
                </div>            
         </fieldset>
    </form>

    <form action="modifJoueur.php" method="post" enctype="multipart/form-data">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Ajouter joueur</legend>    
                <div class="form-group">
                    <label for="nomJoueur">Nom</label>
                    <input type="text" name="nomJoueur" class="form-control" id="nomJoueur" required>
                </div>
                <div class="form-group">
                    <label for="prenomJoueur">Prénom</label>
                    <input type="text" name="prenomJoueur" class="form-control" id="prenomJoueur" required>
                </div>
                <div class="form-group">
                    <label for="photoJoueur">Photo (par défaut logo du club)</label>
                    <input type="file" name="photoJoueur" class="form-control" id="photoJoueur">
                </div>
                <div>
                    <button type="submit" name="sendJoueur" class="btn col-xs-offset-4 col-xs-4">Ajouter</button>
                </div>            
         </fieldset>
    </form>


</body>
</html>
