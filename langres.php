<?php
session_start();
require_once('model/connectionBdd.php');
?>
<!doctype html>
<html lang="fr">

<head>
    <title>BB Langres tennis de table</title>
    <meta charset="utf-8" />
    <!--bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--css général-->
    <link rel="stylesheet" href="langres.css" />
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Ranga|Roboto" rel="stylesheet">  
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--bootstrap js-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--fullcalendar-->
    <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
    <script src='fullcalendar/lib/moment.min.js'></script>
    <script src='fullcalendar/fullcalendar.js'></script>
    <script src='fullcalendar/locale/fr.js'></script>
    <script src='fullcalendar/functionCalendar.js'></script>

    <meta name="viewport, width=device-width" />
</head>

<body>

<!--fenetre membre js bootstrap-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">N'ayez pas peur c'est gratuit!!!</h4>
      </div>
      <div class="modal-body text-center">
       <img src="balleMembre.png" alt="devenez membre">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>      
      </div>
    </div>
  </div>
</div>
    <!--navbar-->
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
                   <img alt="logo du club" id="monLogo" src="logofinal.png"/> 
                </a>
                <h1>BBLangres</h1>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right col-sm-10">
                    <li class="col-xs-6 col-sm-2"><a href="#">BBLangres</a></li>
                    <li class="col-xs-6 col-sm-2 lienHisto"><a href="#historique">Historique</a></li>
                    <li class="col-xs-6 col-sm-2 lienEffect"><a href="#effectif">Effectif</a></li>
                    <li class="col-xs-6 col-sm-2 lienCalend"><a href="#calendrier">Calendrier</a></li>
                    <li class="col-xs-6 col-sm-2 lienCont"><a href="#contact">Contact</a></li>
                    <li class="col-xs-6 col-sm-2"><a href="http://www.fftt.com/site/"><span class="f">F</span><span class="ft">FT</span><span class="t">T</span></a></li>
                    <li class="col-xs-6 col-sm-6 "><a href="inscription.php"><span class="colorHoverRed"><span class="glyphicon glyphicon-user"></span> Inscription</span></a></li>
                    <li class="col-xs-6 col-sm-6 "><a href="connexion.php"><span class="colorHoverBlue"><span class="glyphicon glyphicon-log-in"></span> Connection</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--end navbar-->

    <?php
    //message confirmation
    if ($_SESSION['messageInscription']){
        echo "<script>alert('" .$_SESSION['messageInscription']. "')</script>";
        session_destroy();
    }
    ?>

    <!--header-->
    <header class="container">
        <div class="row">
            <h2 class="col-xs-12 placement text-center">
            <?php
            require_once('model/selectionTitre.php');
            ?>
            </h2>
        </div>       
        <img src="langresBanniere.jpg" id="banniere" alt="rempard de Langres" title="rempard de Langres" />
    </header>
    <!--end header-->

    <main>
        <!--section presentation-->
        <section id="presentation">
            <div class="container">
                <div class="col-xs-12 text-left col-sm-6">
                    <div class="thumbnail">
                        
                        <?php
                        $requete = "SELECT photo FROM article ORDER BY id_article DESC LIMIT 1";
                        $result = $bdd->query($requete);
                        $donnees = $result->fetch();
                        ?>
                        
                        <img src="<?php echo $donnees['photo'];?>" alt="..."/>  
                    
                        <div class="caption">
                            <h3 class="colorRed">
                            <?php
                            $requete = "SELECT titre FROM article ORDER BY id_article DESC LIMIT 1";
                            $result = $bdd->query($requete);         
                            $donnees = $result->fetch();
                            echo $donnees["titre"];
                            ?>
                            </h3>
                            <p class="text-center">
                            <?php
                            $requete = "SELECT contenu FROM article ORDER BY id_article DESC LIMIT 1";
                            $result = $bdd->query($requete);         
                            $donnees = $result->fetch();
                            echo $donnees["contenu"];
                            ?>
                           </p>
                           <p class="text-left">
                            <?php
                            $requete = "SELECT date_envoi FROM article ORDER BY id_article DESC LIMIT 1";
                            $result = $bdd->query($requete);         
                            $donnees = $result->fetch();
                            $date = new DateTime($donnees["date_envoi"]);
                            $dateFormat = date_format($date, 'd-m-Y');
                            echo $dateFormat;
                            ?>
                           </p>

                        </div>
                    </div>
                    <!--</div>-->
                </div>
                <div class="col-xs-12 text-right col-sm-6">
                    <!--<div class="col-xs-10 col-xs-offset-1 text-right col-sm-4 col-md-4">-->
                    <div class="thumbnail">

                        <?php
                        $requete = "SELECT photo FROM article ORDER BY id_article DESC LIMIT 1,1";
                        $result = $bdd->query($requete);
                        $donnees = $result->fetch();
                        ?>
                        
                        <img src="<?php echo $donnees['photo'];?>" alt="..."/>

                        <div class="caption">
                            <h3 class="colorBlue">
                            <?php
                            $requete = "SELECT titre FROM article ORDER BY id_article DESC LIMIT 1,1";
                            $result = $bdd->query($requete);       
                            $donnees = $result->fetch(); 
                            echo $donnees["titre"];                        
                            ?>
                            </h3>
                            <p class="text-center">
                            <?php
                            $requete = "SELECT contenu FROM article ORDER BY id_article DESC LIMIT 1,1";
                            $result = $bdd->query($requete);         
                            $donnees = $result->fetch();
                            echo $donnees["contenu"];
                            ?>
                            </p>
                            <p class="text-right">
                            <?php
                            $requete = "SELECT date_envoi FROM article ORDER BY id_article DESC LIMIT 1,1";
                            $result = $bdd->query($requete);         
                            $donnees = $result->fetch();
                            $date = new DateTime($donnees["date_envoi"]);
                            $dateFormat = date_format($date, 'd-m-Y');
                            echo $dateFormat;
                            ?>
                           </p>

                        </div>
                    </div>
                    <!--</div>-->
                </div>
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 text-center">
                        <a href="articles.php"><button type="button" class="btn btn-default btn-block">Voir les derniers articles</button></a>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10">
                        <div id="carousel-ping" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <!--slide-->

                            <ol class="carousel-indicators">
                                <li data-target="#carousel-ping" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-ping" data-slide-to="1"></li>
                                <li data-target="#carousel-ping" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <?php
                                    $requete = "SELECT cheminPhoto FROM photo ORDER BY id_photo DESC LIMIT 1";
                                    $result = $bdd->query($requete);
                                    $donnees = $result->fetch();
                                    ?>
                                    <img src="<?php echo $donnees['cheminPhoto'];?>" alt=""/>
                                </div>
                                <div class="item">
                                    <?php
                                    $requete = "SELECT cheminPhoto FROM photo ORDER BY id_photo DESC LIMIT 1,1";
                                    $result = $bdd->query($requete);
                                    $donnees = $result->fetch();
                                    ?>
                                    <img src="<?php echo $donnees['cheminPhoto'];?>" alt=""/>
                                </div>
                                <div class="item">
                                    <?php
                                    $requete = "SELECT cheminPhoto FROM photo ORDER BY id_photo DESC LIMIT 2,1";
                                    $result = $bdd->query($requete);
                                    $donnees = $result->fetch();
                                    ?>
                                    <img src="<?php echo $donnees['cheminPhoto'];?>" alt=""/>
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
                        <a href="photos.php"><button type="button" class="btn btn-default btn-block">Voir les dernières photos</button></a>
                    </div>
                </div>
            </div>

        </section>
        <!--end section presentation-->

        <!--section historique-->
        <section id="historique">
            <div class="container">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 text-center">
                        <h2>HISTORIQUE</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <img src="raquettefinal.png" alt=""/>
                        <p class="histo-para">- Le club de Langres a vu le jour le 23 juillet 1974</br>
                        </br>
                        - Il est fondé par Pierre GARNIER, Jean-Marie DANJOU et Pascal VALENTIN</br>
                        </p>

                        <img src="gymnase1.jpg" class="img-circle img-gymnase1" alt=""/>
                        <img src="gymnase2.jpg" class="img-circle img-gymnase2" alt=""/>
                        <img src="gymnase3.jpg" class="img-circle img-gymnase3" alt=""/>
                    </div>
                </div>
            </div>
        </section>
        <!--end section historique-->

        <!--section effectif-->
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
                                <?php
                                    $requete = "SELECT photo FROM bureau WHERE poste='TRESORIER' ORDER BY id_bureau DESC";
                                    $result = $bdd->query($requete);
                                    $donnees = $result->fetch();
                                ?>
                                <img src="<?php echo $donnees['photo'];?>" alt="..."/>
                                <div class="caption">
                                    <p class="text-center">TRESORIER</p>
                                    <p class="text-center">
                                    <?php
                                    $requete = "SELECT prenom FROM bureau WHERE poste='TRESORIER' ORDER BY id_bureau DESC";
                                    $result = $bdd->query($requete);
                                    $donnees = $result->fetch();
                                    echo $donnees['prenom'];
                                    ?>
                                    </br>
                                    <?php
                                    $requete = "SELECT nom FROM bureau WHERE poste='TRESORIER' ORDER BY id_bureau DESC";
                                    $result = $bdd->query($requete);
                                    $donnees = $result->fetch();
                                    echo $donnees['nom'];
                                    ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="thumbnail">
                                <?php
                                    $requete = "SELECT photo FROM bureau WHERE poste='PRESIDENT' ORDER BY id_bureau DESC";
                                    $result = $bdd->query($requete);
                                    $donnees = $result->fetch();
                                ?>
                                <img src="<?php echo $donnees['photo'];?>" alt="..."/>
                                <div class="caption">
                                    <p class="text-center">PRESIDENT</p>
                                    <p class="text-center">
                                    <?php
                                    $requete = "SELECT prenom FROM bureau WHERE poste='PRESIDENT' ORDER BY id_bureau DESC";
                                    $result = $bdd->query($requete);
                                    $donnees = $result->fetch();
                                    echo $donnees['prenom'];
                                    ?>
                                    </br>
                                    <?php
                                    $requete = "SELECT nom FROM bureau WHERE poste='PRESIDENT' ORDER BY id_bureau DESC";
                                    $result = $bdd->query($requete);
                                    $donnees = $result->fetch();
                                    echo $donnees['nom'];
                                    ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="thumbnail">
                                <?php
                                    $requete = "SELECT photo FROM bureau WHERE poste='SECRETAIRE' ORDER BY id_bureau DESC";
                                    $result = $bdd->query($requete);
                                    $donnees = $result->fetch();
                                ?>
                                <img src="<?php echo $donnees['photo'];?>" alt="..."/>
                                <div class="caption">
                                    <p class="text-center">SECRETAIRE</p>
                                    <p class="text-center">
                                    <?php
                                    $requete = "SELECT prenom FROM bureau WHERE poste='SECRETAIRE' ORDER BY id_bureau DESC";
                                    $result = $bdd->query($requete);
                                    $donnees = $result->fetch();
                                    echo $donnees['prenom'];
                                    ?>
                                    </br>
                                    <?php
                                    $requete = "SELECT nom FROM bureau WHERE poste='SECRETAIRE' ORDER BY id_bureau DESC";
                                    $result = $bdd->query($requete);
                                    $donnees = $result->fetch();
                                    echo $donnees['nom'];
                                    ?>
                                    </p>
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
                        <img src="joueurs.jpg" alt=""/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 text-center">
                        <a href="joueurs.php" <button type="button" class="btn btn-default btn-block">Découvrir nos joueurs</button></a>
                    </div>
                </div>
            </div>
        </section>
        <!--end section effectif-->

        <!--section calendrier-->
        <section id="calendrier">
            <div class="container">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 text-center">
                        <h2>CALENDRIER</h2>
                    </div>
                </div>
                <div class="row">
                   <div id="calendar"></div>

            </div>
        </section>
        <!--end section calendrier-->

        <!--section contact-->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 text-center">
                        <h2>CONTACT</h2>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-offset-2 col-xs-8 text-center">
                        <p>Président :
                        <?php 
                        $requete = "SELECT tel FROM bureau WHERE poste='PRESIDENT' ORDER BY id_bureau DESC";
                        $result = $bdd->query($requete);
                        $donnees = $result->fetch();
                        echo $donnees['tel'];
                        ?>
                        ou 
                        <?php 
                        $requete = "SELECT mail FROM bureau WHERE poste='PRESIDENT' ORDER BY id_bureau DESC";
                        $result = $bdd->query($requete);
                        $donnees = $result->fetch();
                        ?>
                        <a href="mailto:<?php echo $donnees['mail']?>"><?php echo $donnees['mail']?></a></p>
                        <p>Trésorier :
                        <?php 
                        $requete = "SELECT tel FROM bureau WHERE poste='TRESORIER' ORDER BY id_bureau DESC";
                        $result = $bdd->query($requete);
                        $donnees = $result->fetch();
                        echo $donnees['tel'];
                        ?> 
                        ou 
                        <?php 
                        $requete = "SELECT mail FROM bureau WHERE poste='TRESORIER' ORDER BY id_bureau DESC";
                        $result = $bdd->query($requete);
                        $donnees = $result->fetch();
                        ?>
                        <a href="mailto:<?php echo $donnees['mail']?>"><?php echo $donnees['mail']?></a></p>
                        <p>Secrétaire : 
                        <?php 
                        $requete = "SELECT tel FROM bureau WHERE poste='SECRETAIRE' ORDER BY id_bureau DESC";
                        $result = $bdd->query($requete);
                        $donnees = $result->fetch();
                        echo $donnees['tel'];
                        ?> 
                        ou 
                        <?php 
                        $requete = "SELECT mail FROM bureau WHERE poste='SECRETAIRE' ORDER BY id_bureau DESC";
                        $result = $bdd->query($requete);
                        $donnees = $result->fetch();
                        ?>
                        <a href="mailto:<?php echo $donnees['mail']?>"><?php echo $donnees['mail']?></a></p>
                        <p>Adresse gymnase : 
                        <?php 
                        $requete = "SELECT * FROM gymnase ORDER BY id_gymnase DESC LIMIT 1";
                        $result = $bdd->query($requete);                    
                        $donnees = $result->fetch();
                        echo $donnees['nom']. ", " .$donnees['adresse']. ", ".$donnees['code_postal']. " " .$donnees['ville'];
                        ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-center margeBotomPlan">
                        <iframe width="auto" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAeAVQ9_Jj6VJNwU8Ui9hn1HL0nvjtY48k
                        &q=880 avenue de l'europe, Langres'" allowfullscreen>
                        </iframe>
                    </div>
                </div>
        </section>
        <!--end section contact-->
    </main>

    <!--footer-->
    <footer class="container-fluid">
        <div class="row margeTopFooter">
            <div class="col-xs-3 premierePartie">              
                <p><a class="colorRed" href="#">Acceuil</a></p>
                <p><a class="colorRed" href="articles.php">- Articles</a></p>
                <p><a class="colorRed" href="photos.php">- Photos</a></p>
                <p><a class="colorRed lienHisto" href="#historique">Historique</a></p>
                <p><a class="colorRed lienEffect" href="#effectif">Effectif</a></p>
                <p><a class="colorRed" href="joueurs.php">- Joueurs</a></p>
            </div>
            <div class="col-xs-3 deuxiemePartie">         
                <p><a class="colorBlue lienCalend" href="#calendrier">Calendrier</a></p>
                <p><a class="colorBlue lienCont" href="#contact">Contact</a></p>
                <p><a class="colorBlue" href="http://www.fftt.com/site/">FFTT</a></p>
                <p><a class="colorBlue" href="inscription.php">Inscription</a></p>
                <p><a class="colorBlue" href="connexion.php">Connection</a></p>
            </div>

            <div class="col-xs-6 text-right">
                <p><img src="minionPing.gif" alt="image animee minions ping"/></p>
            </div>
        </div>
    </footer>
    <!--end footer-->

<!--js général-->
<script src="langres.js"></script>
</body>

</html>
