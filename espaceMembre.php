<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>espace membre</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="membre.css">
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
</head>

<body id="corps">
   
    <?php include('enTeteAnnexe.php');
    echo "<p class='text-center'>bienvenue dans l'espace membre " .$_SESSION['pseudo']. "!!!</p>";
    ?>
    <main>
        
    
        <section class="container" id="tchat">
            <div class="row title col-xs-offset-2 col-xs-8 text-center">
                <h2>Tchat du BB Langres</h2>
            </div>
            <div class="row talk col-xs-offset-2 col-xs-8">
                <?php
                    require_once('connectionBdd.php');
                    $requeteSelect = "SELECT * FROM tchat ORDER BY id_tchat DESC LIMIT 10";
                    $result = $bdd->query($requeteSelect);
                    while($donnees = $result->fetch()){
                        $date_envoi = new Datetime($donnees['date_envoi']);
                        $dateFormat = date_format($date_envoi, 'd-m-Y H:i:s');
                        if($donnees['pseudo'] == $_SESSION['pseudo']){
                            echo "<p id='" .$donnees["id_tchat"]. "'><span class='pseudoMoi'>" .$donnees['pseudo']. "</span> : le " .$dateFormat. "</br>"
                            .$donnees['message']."</p>";
                        }
                        else{
                            echo "<p id='" .$donnees["id_tchat"]. "' class='text-right'><span class='pseudoAutre'>" .$donnees['pseudo']. "</span> : le " .$dateFormat. "</br>"
                            .$donnees['message']."</p>";
                        }
                    }
                ?>            
            </div>
            <div class="row send col-xs-offset-2 col-xs-8 text-center">
                <form method="post" action="tchat.php">
                    <textarea name="message"></textarea></br>
                    <button id="sendAjax" type="submit" name="send">Envoyer</button> 
                    <button id="refreshAjax" type="button" name="refresh">Rafraichir</button>       
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
<script src="espaceMembre.js"> 
</script>   
</body>
</html>
