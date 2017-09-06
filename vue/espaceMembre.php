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
    <link rel="stylesheet" href="../css/calculatrice.css">
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
             <div class="col-xs-offset-2 col-xs-8 text-center">
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
            <div class="row col-xs-offset-2 col-xs-8 text-center">
                <h2>Calculatrice</h2>
            </div>
            <div class="col-xs-offset-2 col-xs-8 text-center" id="calculBorder">         
                <div class="col-xs-12">
                    <div class="col-xs-12 col-sm-6 text-center">
                        <label for="myPoint" id="myLabel">Mes points : </label></br>
                        <input type="text" name="myPoint" id="myPoint" class="text-center" pattern="^[1-9][0-9]{2,3}$" maxlength="4" required>               
                    </div>
                    <div class="col-xs-12 col-sm-6 text-center">
                        <label for="pointAdv" id="advLabel">points adversaires : </label></br>
                        <input type="text" name="pointAdv" id="pointAdv" class="text-center" pattern="^[1-9][0-9]{2,3}$" maxlength="4" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-12 text-center coefMargin">
                        <label>coeff : </label></br>
                        <select id="calculSelect">
                            <option value="0.5">0.5</option>
                            <option value="0.75">0.75</option>
                            <option value="1" selected>1</option>
                            <option value="1.25">1.25</option>
                            <option value="1.5">1.5</option>
                        </select>               
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-12 text-center resultMargin">
                        <div class="col-xs-6 text-center">
                            <input type="radio" name="resultat" value="victoire" checked>Victoire
                        </div>
                        <div class="col-xs-6 text-center">
                            <input type="radio" name="resultat" value="defaite">Défaite
                        </div>          
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-12 text-center">
                        <button type="button" id="calculButton">Résultat</button>          
                    </div>
                    <div class="col-xs-12 text-center">
                        <input type="text" name="resultFinal" id="resultFinal" readonly>          
                    </div>
                </div>
            </div>
        </section>


    </main>
<script src="../js/espaceMembre.js"> 
</script>
<script src="../js/calculatrice.js"> 
</script> 
</body>
</html>
