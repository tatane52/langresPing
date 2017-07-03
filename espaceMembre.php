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
</body>
</html>