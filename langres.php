<?php
require_once('connectionBdd.php');
?>
<!doctype html>
<html lang="fr">

<head>
    <title>BB Langres tennis de table</title>
    <meta charset="utf-8" />
    <!--bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--css-->
    <link rel="stylesheet" href="langres.css" />
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Ranga|Roboto" rel="stylesheet">
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--bootstrap js-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport, width=device-width" />
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                   <img alt="Brand" id="monLogo" src="logofinal.png"> 
                </a>
                <h1>BBLangres</h1>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right col-sm-10">
                    <li class="col-xs-6 col-sm-2"><a href="#">BBLangres</a></li>
                    <li class="col-xs-6 col-sm-2"><a href="#historique">Historique</a></li>
                    <li class="col-xs-6 col-sm-2"><a href="#effectif">Effectif</a></li>
                    <li class="col-xs-6 col-sm-2"><a href="#calendrier">Calendrier</a></li>
                    <li class="col-xs-6 col-sm-2"><a href="#contact">Contact</a></li>
                    <li class="col-xs-6 col-sm-2"><a href="http://www.fftt.com/site/"><span class="f">F</span><span class="ft">FT</span><span class="t">T</span></a></li>
                    <li class="col-xs-6 col-sm-6 "><a href="inscription.php"><span class="colorHoverRed"><span class="glyphicon glyphicon-user"></span> Inscription</span></a></li>
                    <li class="col-xs-6 col-sm-6 "><a href="connexion.php"><span class="colorHoverBlue"><span class="glyphicon glyphicon-log-in"></span> Connection</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="container">
        <div class="row">
            <h2 class="col-xs-12 placement text-center">
            <?php 
            $requete = "SELECT titre FROM site ORDER BY id_site DESC LIMIT 1";
            $result = $bdd->query($requete);                    
            while($donnees = $result->fetch()){
                echo $donnees["titre"];
            }
            ?>
            </h2>
        </div>
        <img src="langresBanniere.jpg" id="banniere" alt="rempard de la ville" title="rempard de la ville" />
    </header>

    <main>
        <section id="presentation">
            <div class="container">
                <div class="col-xs-12 text-left col-sm-6">
                    <!--<div class="col-xs-10 col-xs-offset-1 text-left col-sm-4 col-md-4">-->
                    <div class="thumbnail">
                        <img src="logofinal.png" alt="...">
                        <div class="caption">
                            <h3 class="colorRed">
                            <?php
                            $requete = "SELECT titre FROM article ORDER BY id_article DESC LIMIT 1";
                            $result = $bdd->query($requete);         
                            while($donnees = $result->fetch()){
                                echo $donnees["titre"];
                            }
                            ?>
                            </h3>
                            <p>
                            <?php
                            $requete = "SELECT contenu FROM article ORDER BY id_article DESC LIMIT 1";
                            $result = $bdd->query($requete);         
                            while($donnees = $result->fetch()){
                                echo $donnees["contenu"];
                            }
                            ?>
                           </p>

                        </div>
                    </div>
                    <!--</div>-->
                </div>
                <div class="col-xs-12 text-right col-sm-6">
                    <!--<div class="col-xs-10 col-xs-offset-1 text-right col-sm-4 col-md-4">-->
                    <div class="thumbnail">
                        <img src="logofinal.png" alt="...">
                        <div class="caption">
                            <h3 class="colorBlue">
                            <?php
                            $requete = "SELECT titre FROM article ORDER BY id_article ASC LIMIT 1";
                            $result = $bdd->query($requete);         
                            while($donnees = $result->fetch()){
                                echo $donnees["titre"];
                            }
                            ?>
                            </h3>
                            <p>
                            <?php
                            $requete = "SELECT contenu FROM article ORDER BY id_article ASC LIMIT 1";
                            $result = $bdd->query($requete);         
                            while($donnees = $result->fetch()){
                                echo $donnees["contenu"];
                            }
                            ?>
                            </p>

                        </div>
                    </div>
                    <!--</div>-->
                </div>
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 text-center">
                        <button type="button" class="btn btn-default btn-block">Voir les derniers articles</button>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10">
                        <div id="carousel-ping" class="carousel slide" data-ride="carousel" data-interval="9999999999999999">
                            <!--slide-->

                            <ol class="carousel-indicators">
                                <li data-target="#carousel-ping" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-ping" data-slide-to="1"></li>
                                <li data-target="#carousel-ping" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="foto1.jpg" alt="Chania">
                                </div>
                                <div class="item">
                                    <img src="foto2.jpg" alt="Chania">
                                </div>
                                <div class="item">
                                    <img src="foto3.jpg" alt="Flower">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-ping" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-ping" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>


                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 text-center">
                        <button type="button" class="btn btn-default btn-block">Voir les dernières photos</button>
                    </div>
                </div>
            </div>

        </section>

        <section id="historique">
            <div class="container">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 text-center">
                        <h2>HISTORIQUE</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <img src="raquettefinal.png">
                        <p class="histo-para">- Le club de Langres a vu le jour le 23 juillet 1974</br>
                        </br>
                        - Il est fondé par Pierre GARNIER, Jean-Marie DANJOU et Pascal VALENTIN</br>
                        </p>

                        <img src="gymnase1.jpg" class="img-circle img-gymnase1" alt="">
                        <img src="gymnase2.jpg" class="img-circle img-gymnase2" alt="">
                        <img src="gymnase3.jpg" class="img-circle img-gymnase3" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="effectif">
            <div class="container">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 text-center">
                        <h2>EFFECTIF</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 text-center">
                        <h3>Le bureau</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <div class="thumbnail">
                                <img src="tresorier.jpg" alt="...">
                                <div class="caption">
                                    <p class="text-center">TRESORIER</p>
                                    <p class="text-center">Michel</br> POISAT</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="thumbnail">
                                <img src="president.jpg" alt="...">
                                <div class="caption">
                                    <p class="text-center">PRESIDENT</p>
                                    <p class="text-center">Stephane</br> CHEVALIER</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="thumbnail">
                                <img src="secretaire.jpg" alt="...">
                                <div class="caption">
                                    <p class="text-center">SECRETAIRE</p>
                                    <p class="text-center">Jean-Marie</br> DANJOU</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 text-center">
                        <h3>Les joueurs</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 thumbnail">
                        <img src="joueurs.jpg">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 text-center">
                        <button type="button" class="btn btn-default btn-block">Découvrir nos joueurs</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="calendrier">
            <div class="container">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 text-center">
                        <h2>CALENDRIER</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 text-center">
                        <p><img src="calendrier2017.jpg"></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 text-center">
                        <h2>CONTACT</h2>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-offset-2 col-xs-8 text-center">
                        <p>Président : 06 06 06 06 06 ou <a href="mailto:tatane52@me.com">toto@me.com</a></p>
                        <p>Trésorier : 06 06 06 06 06 ou <a href="mailto:tatane52@me.com">toto@me.com</a></p>
                        <p>Secrétaire : 06 06 06 06 06 ou <a href="mailto:tatane52@me.com">toto@me.com</a></p>
                        <p>Adresse gymnase : gymnase Roger THEVENOT, 880 avenue de l'europe, 52200 LANGRES</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <iframe width="auto" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAeAVQ9_Jj6VJNwU8Ui9hn1HL0nvjtY48k
                        &q=880 avenue de l'europe, Langres'" allowfullscreen>
                        </iframe>
                    </div>
                </div>
        </section>
    </main>
    <footer class="container-fluid">
        <div class="row">
            <div class="col-xs-3">
                <p>Plan du site</p>
                <p><a class="colorRed" href="#">Acceuil</a></p>
                <p><a class="colorRed" href="#historique">Historique</a></p>
                <p><a class="colorRed" href="#effectif">Effectif</a></p>
                <p><a class="colorRed" href="#calendrier">Calendrier</a></p>

            </div>
            <div class="col-xs-3">
                <p>Plan du site</p>
                <p><a class="colorBlue" href="#contact">Contact</a></p>
                <p><a class="colorBlue" href="http://www.fftt.com/site/">FFTT</a></p>
                <p><a class="colorBlue" href="inscription.html">Inscription</a></p>
                <p><a class="colorBlue" href="connexion.html">Connection</a></p>
            </div>

            <div class="col-xs-6 text-right">
                <p><img src="minionPing.gif" /></p>
            </div>
        </div>
    </footer>
<script src="langres.js">
    
</script>
</body>

</html>
