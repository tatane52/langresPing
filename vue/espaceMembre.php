<?php
session_start();
//connexion bdd
require_once('../model/connectionBdd.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>espace membre</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/membre.css">
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
</head>

<body id="corps">
   
    <!--inclusion d'entête php-->
    <?php include('enTeteAnnexe.php');
    echo "<p class='text-center'>bienvenue dans l'espace membre " .$_SESSION['pseudo']. "!!!</p>";
    ?>
    <main>
        
       <section class="container" id="convoc">
            <div class="row col-xs-offset-2 col-xs-8 text-center">
                <h2>Convocations sportives</h2>
            </div>
             <div class="row col-xs-offset-2 col-xs-8">
                <?php
                //requete * tchat
                require_once('../model/traitementConvocMembre.php');
                                   
                ?>
            </div>
        </section>

        <section class="container" id="tchat">
            <div class="row title col-xs-offset-2 col-xs-8 text-center">
                <h2>Tchat du BB Langres</h2>
            </div>
            <div class="row talk col-xs-offset-2 col-xs-8">
                <?php
                    //requete * tchat
                    require_once('../model/traitementMembreComplet.php');
                ?>            
            </div>
            <div class="row send col-xs-offset-2 col-xs-8 text-center">
                <form method="post" action="">
                    <textarea id="messageAjax" name="message"></textarea></br>
                    <button id="sendAjax" type="submit" name="send">Envoyer</button>        
                </form>
                
            </div>
        </div>
        </section>
        
        <section class="container" id="calculatrice">
            <!--<object data="calculatrice.jar" width=300 height=300>
            le navigateur ne peut pas lire l'application
            </object>-->
        </section>


    </main>
<script src="../js/espaceMembre.js"> 
</script>   
</body>
</html>
