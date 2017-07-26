 <?php 
session_start();
require_once('connectionBdd.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>inscription ping</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="inscription.css" />
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
    <!--inclusion d'entête php-->
    <?php include('enTeteAnnexe.php'); ?>
    <!--fin inclusion-->

    <div class="col-xs-offset-2 col-xs-8 text-center">
        <p>(*) : données à remplir obligatoirement</p>
    </div>

    <form method="post" action="resultInscription.php">

        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="name">Nom(*) :</label>
            <input type="text" name="nom" class="form-control" id="name" maxlength="25" required>
        </div>
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="firstname">Prénom(*) :</label>
            <input type="text" name="prenom" class="form-control" id="firstname" maxlength="25" required>
        </div>
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="pwd">Mot de passe(*) :</label>
            <input type="password" name="mdp" class="form-control" id="pwd" required>
            <div id="taille"></div>
        </div>
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="confirm">Confirmation mot de passe(*) :</label>
            <input type="password" name="confirmMdp" class="form-control" id="confirm" required>
            <div id="analyseMdp"></div>
        </div>
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="pseudo">Pseudo(*) :</label>
            <input type="text" name="pseudo" class="form-control" id="pseudo" maxlength="20" required>
            <div id="analysePseudo"></div>
        </div>
        
        <!--<div class="form-group col-xs-offset-2 col-xs-8">
            <label for="phone">N° tel :</label>
            <input type="tel" class="form-control" id="phone" placeholder="0505050505" pattern="^0[1-9][0-9]{8}$">
        </div>-->
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="email">Email(*) :</label>
            <input type="email" name="mail" class="form-control" id="email" pattern="^[a-z0-9.-_]+@[a-z0-9.-_]{2,}\.[a-z]{2,4}$" required>
        </div>

        
        <!--<div class="form-group col-xs-offset-2 col-xs-8">
            <label for="message">Message :</label></br>
            <textarea id="message" placeholder="agrandissez le cadre avec le coin bas/droite" resize="both"></textarea>
        </div>-->
        <button type="submit" name="send" id="submit" class="btn-primary col-xs-offset-2 col-xs-3">Envoyer</button>
        <button type="reset" class="btn-danger col-xs-offset-2 col-xs-3">Reset</button>
    </form>

    
    <script src="inscription.js">
    </script>
</body>
</html>