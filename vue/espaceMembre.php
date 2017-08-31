<?php
session_start();
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
        
       <!-- <section class="container" id="convoc">
            <div class="row col-xs-offset-2 col-xs-8 text-center">
                <h2>Convocations sportives</h2>
            </div>
             <div class="row col-xs-offset-2 col-xs-8">-->
                 <?php
                   /* $jour = date('d');
                    require_once('connectionBdd.php');
                    $requeteSelect = "SELECT * FROM convoc ORDER BY id_convoc WHERE jour > $jour";
                    $result = $bdd->query($requeteSelect);
                    while($donnees = $result->fetch()){
                        echo "<table>
                                <thead>
                                    <tr>
                                        <th class='col-xs-3'>EQUIPE</th>
                                        <th class='col-xs-3'>ADVERSAIRE</th>
                                        <th class='col-xs-3'>JOUR</th>
                                        <th class='col-xs-3'>HEURE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class='col-xs-3'>" .$donnees['equipe']. "</td>
                                        <td class='col-xs-3'>" .$donnees['adversaire']. "ADVERSAIRE</td>
                                        <td class='col-xs-3'>" .$donnees['jour']. "JOUR</td>
                                        <td class='col-xs-3'>" .$donnees['heure']. "HEURE</td> 
                                    </tr>
                                    <tr rowspan='4'>
                                        <td colspan='4'>- " .$donnees['nomJoueur1']. ' ' .$donnees['prenomJoueur1']. "</br>
                                        - " .$donnees['nomJoueur2']. ' ' .$donnees['prenomJoueur2']. "</br>
                                        - " .$donnees['nomJoueur3']. ' ' .$donnees['prenomJoueur3']. "</br>
                                        - " .$donnees['nomJoueur4']. ' ' .$donnees['prenomJoueur4']. "
                                        </td>
                                    </tr> 
                                </tbody>
                            </table></br>";
                        
                    }*/
                ?>
            <!-- </div>
        </section>-->

        <section class="container" id="tchat">
            <div class="row title col-xs-offset-2 col-xs-8 text-center">
                <h2>Tchat du BB Langres</h2>
            </div>
            <div class="row talk col-xs-offset-2 col-xs-8">
                <?php

                    //connexion bdd
                    require_once('../model/connectionBdd.php');

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
