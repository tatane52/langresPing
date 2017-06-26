<html>

<head>
    <meta charset="UTF-8">
    <title>connexion ping</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="connexion.css">
</head>

<body>
    <?php include('enTeteAnnexe.php'); ?>
    <form method="POST" action="">
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="email">Pseudo :</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="pwd">Mot de passe :</label>
            <input type="password" class="form-control" id="pwd">
        </div>
        <div>
            <button type="submit" class="btn btn-primary col-xs-offset-4 col-xs-4">connection</button>
        </div>
    </form>

    <script>
        var email = $('#email');
    </script>
</body>

</html>