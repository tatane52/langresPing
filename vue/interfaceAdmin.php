<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>interface administrateur</title>
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css" />
</head>

<body>
    <!--inclusion d'entête php-->
    <?php include('enTeteAnnexe.php'); ?>
    <!--fin inclusion-->

    <?php
    //message confirmation
    if (isset($_SESSION['messageConvoc'])){
        echo "<script>alert('" .$_SESSION['messageConvoc']. "')</script>";
        session_destroy();
    }
    else if (isset($_SESSION['messageErreur'])){
        echo "<script>alert('" .$_SESSION['messageErreur']. "')</script>";
        session_destroy();
    }
    ?>

    <form action="../model/modifConvoc.php" method="post">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Ajouter convocation</legend>    
                <div class="form-group">
                    <label for="equipeConvoc">Equipe</label>
                    <input type="text" name="equipeConvoc" class="form-control" id="equipeConvoc" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label for="adversaireConvoc">Adversaire</label>
                    <input type="text" name="adversaireConvoc" class="form-control" id="adversaireConvoc" maxlength="35" required>
                </div>
                <div class="form-group">
                    <label>lieu : </label>
                    <input type="radio" name="lieu" value="domicile"> Domicile
                    <input type="radio" name="lieu" value="exterieur"> Exterieur
                </div>
                <div class="form-group">
                    <label for="commentaireConvoc">Commentaire</label>
                    <textarea name="commentaireConvoc" class="form-control" id="commentaireConvoc"></textarea>
                </div>
                <div class="form-group">
                    <label for="dateConvoc">Date</label>
                    <input type="text" name="dateConvoc" class="form-control" id="dateConvoc" maxlength="10" placeholder="écrire sous forme : 02-08-2018" pattern="^[0-3][0-9]-[0-1][0-9]-20[1-5][0-9]$" required>
                </div>
                <div class="form-group">
                    <label for="heureConvoc">Heure</label>
                    <input type="text" name="heureConvoc" class="form-control" id="heureConvoc" maxlength="5" placeholder="écrire sous forme : 09:05" pattern="^[0-2][0-9]:[0-5][0-9]$" required>
                </div>
                <div class="form-group">
                    <label>Joueurs : </label>
                    <input type="radio" name="joueur" value="trois"> 3 joueurs
                    <input type="radio" name="joueur" value="quatre"> 4 joueurs
                </div>
                <div id="joueurCache">            
                </div>
                <div>
                    <button type="submit" name="sendConvoc" class="btn col-xs-offset-4 col-xs-4">Ajouter</button>
                </div>            
         </fieldset>
    </form>

    <?php
    //message confirmation
    if (isset($_SESSION['messageCalendrier'])){
        echo "<script>alert('" .$_SESSION['messageCalendrier']. "')</script>";
        session_destroy();
    }
    ?>

    <form action="../model/modifCalendrier.php" method="post">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Ajouter évènement</legend>    
                <div class="form-group">
                    <label for="dateCalendrier">Date</label>
                    <input type="text" name="dateCalendrier" class="form-control" id="dateCalendrier" maxlength="10" placeholder="écrire sous forme : 02-08-2018" pattern="^[0-3][0-9]-[0-1][0-9]-20[1-5][0-9]$" required>
                </div>
                <div class="form-group">
                    <label for="heureCalendrier">Heure début</label>
                    <input type="text" name="heureCalendrier" class="form-control" id="heureCalendrier" maxlength="5" placeholder="écrire sous forme : 09:05" pattern="^[0-2][0-9]:[0-5][0-9]$" required>
                </div>
                <div class="form-group">
                    <label for="titreCalendrier">Titre</label>
                    <input type="text" name="titreCalendrier" class="form-control" id="titreCalendrier" required>
                </div>
                <div>
                    <button type="submit" name="sendCalendrier" class="btn col-xs-offset-4 col-xs-4">Ajouter</button>
                </div>            
         </fieldset>
    </form>

    <?php
    //message confirmation
    if (isset($_SESSION['messageTitre'])){
        echo "<script>alert('" .$_SESSION['messageTitre']. "')</script>";
        session_destroy();
    }
    ?>

    <form action="../model/modifTitre.php" method="post">
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
    if (isset($_SESSION['messageArticle'])){
        echo "<script>alert('" .$_SESSION['messageArticle']. "')</script>";
        session_destroy();
    }
    ?>

    <form action="../model/modifArticle.php" method="post" enctype="multipart/form-data">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Ajouter article</legend>    
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" name="title" class="form-control" id="title" maxlength="50" required>
                </div>
                <div class="form-group">
                    <label for="contenu">Contenu</label>
                    <textarea name="contenu" class="form-control" id="contenu" required></textarea>
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
    if (isset($_SESSION['updateJoueur'])){
        echo "<script>alert('" .$_SESSION['updateJoueur']. "')</script>";
        session_destroy();
    }
    ?>

    <form action="traitementModifArticle.php" method="post">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Modification article</legend>    
                <div class="form-group">
                    <label for="nomUpdateArticle">Sélection article</label>
                    <select name="nomUpdateArticle" class="form-control" id="nomUpdateArticle">
                    <?php 
                    require_once('../model/connectionBdd.php');
                    require_once('../model/traitementArticleComplet.php');
                    while ($donnees = $result->fetch()){
                    ?>
                        <option value="<?php echo $donnees['id_article']; ?>"><?php echo $donnees['titre']. " du " .$donnees['date_envoi']?></option>
                    <?php
                    }                  
                    ?>             
                    </select>
                </div>
                <div>
                    <button type="submit" name="updateArticle" class="btn col-xs-offset-4 col-xs-4">Modifier</button>
                </div>            
         </fieldset>
    </form>

    <?php
    //message confirmation
    if (isset($_SESSION['messagePhoto'])){
        echo "<script>alert('" .$_SESSION['messagePhoto']. "')</script>";
        session_destroy();
    }
    ?>

    <form action="../model/modifPhoto.php" method="post" enctype="multipart/form-data">
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
    if (isset($_SESSION['messageBureau'])){
        echo "<script>alert('" .$_SESSION['messageBureau']. "')</script>";
        session_destroy();
    }
    else if (isset($_SESSION['messageErreurPoste'])){
        echo "<script>alert('" .$_SESSION['messageErreurPoste']. "')</script>";
        session_destroy();
    }
    ?>

    <form action="../model/modifBureau.php" method="post" enctype="multipart/form-data">
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
                    <input type="radio" name="poste" value="president"> Président
                    <input type="radio" name="poste" value="tresorier"> Trésorier
                    <input type="radio" name="poste" value="secretaire"> Secrétaire
                </div>
                <div class="form-group">
                    <label for="telBureau">Téléphone</label>
                    <input type="phone" name="telBureau" class="form-control" placeholder="écrire sous forme : 0606060606" id="telBureau" maxlength="10" pattern="^0[1-9][0-9]{8}$" required>
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
    if (isset($_SESSION['messageGymnase'])){
        echo "<script>alert('" .$_SESSION['messageGymnase']. "')</script>";
        session_destroy();
    }
    ?>

    <form action="../model/modifGymnase.php" method="post">
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

    <?php
    //message confirmation
    if (isset($_SESSION['messageJoueur'])){
        echo "<script>alert('" .$_SESSION['messageJoueur']. "')</script>";
        session_destroy();
    }
    ?>
    
    <form action="../model/modifJoueur.php" method="post" enctype="multipart/form-data">
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

    <?php
    //message confirmation
    if (isset($_SESSION['deleteJoueur'])){
        echo "<script>alert('" .$_SESSION['deleteJoueur']. "')</script>";
        session_destroy();
    }
    ?>

    <form action="../model/traitementSuppressionJoueur.php" method="post">
        <fieldset class="col-xs-offset-1 col-xs-10">
            <legend class="text-center">Suppression joueur</legend>    
                <div class="form-group">
                    <label for="nomDeleteJoueur">Sélection nom</label>
                    <select name="nomDeleteJoueur" class="form-control" id="nomDeleteJoueur">
                    <?php 
                    require_once('../model/connectionBdd.php');
                    require_once('../model/traitementJoueurComplet.php');
                    while ($donnees = $result->fetch()){
                    ?>
                        <option value="<?php echo $donnees['id_joueur']; ?>"><?php echo $donnees['nom']. " " .$donnees['prenom']?></option>
                    <?php
                    }                  
                    ?>             
                    </select>
                </div>
                <div>
                    <button type="submit" name="deleteJoueur" class="btn col-xs-offset-4 col-xs-4">Supprimer</button>
                </div>            
         </fieldset>
    </form>

<script src="../js/interfaceAdmin.js">   
</script>
</body
</html>
