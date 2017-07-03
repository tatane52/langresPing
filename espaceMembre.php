<?php
session_start();
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>espace membre</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="membre.css">
</head>

<body>

    <?php include('enTeteAnnexe.php');
    echo "bienvenue dans l'espace membre " .$_SESSION['pseudo'];
    ?>
    <main>
        
    
    <section class="container" id="tchat">
        <div class="row title col-xs-offset-2 col-xs-8 text-center">
            <h2>Tchat du BB Langres</h2>
        </div>
        <div class="row talk col-xs-offset-2 col-xs-8">
            
        </div>
        <div class="row send col-xs-offset-2 col-xs-8 text-center">
            <form method="post" action="tchat.php">
                <textarea name="message"></textarea></br>
                <button type="submit">Envoyer</button>
            </form>
            
        </div>
    </div>
    </main>

</body>
</html>
