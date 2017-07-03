<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>connexion ping</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="connexion.css">
</head>

<body>
    <!--inclusion d'entête php-->
    <?php include('enTeteAnnexe.php'); ?>
    <!--fin inclusion-->
    <form method="POST" action="resultConnexion.php">
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="pseudo">Pseudo :</label>
            <input type="text" name="pseudo" class="form-control" id="pseudo" required>
        </div>
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="pwd">Mot de passe :</label>
            <input type="password" name="mdp" class="form-control" id="pwd" required>
        </div>
        <div>
            <button type="submit" name="send" class="btn btn-primary col-xs-offset-4 col-xs-4">connection</button>
        </div>
    </form>

   
</body>

</html>