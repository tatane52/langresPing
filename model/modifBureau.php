<?php

function replaceRandom($nameImage){
            $chiffreDebut = rand(1, 1000000);
            
            return $chiffreDebut.$nameImage;
        }

if(isset($_POST['sendBureau']) && !empty($_POST['nomBureau']) && !empty($_POST['prenomBureau']) && isset($_POST['poste']) && !empty($_POST['telBureau']) && !empty($_POST['mailBureau'])){
    require_once('connectionBdd.php');
    //htmlentities ne marche pas avec str_replace
    $nom = htmlspecialchars($_POST['nomBureau']);  
    $accents = array('é', 'è', 'ê', 'ë', 'ï', 'î', 'ô', 'ö', 'à', 'â', 'ä', 'û', 'ü', 'ù', 'ç', '\'');
    $accentsMaj = array('E', 'E', 'E', 'E', 'I', 'I', 'O', 'O', 'A', 'A', 'A', 'U', 'U', 'U', 'C', ' ');
    $nomSansAccent = str_replace($accents, $accentsMaj, $nom);  
    $nomMaj = strtoupper($nomSansAccent);
    $prenom = htmlspecialchars($_POST['prenomBureau']);
    $prenomFirstLetterMaj = ucfirst($prenom);
    $prenomSansQuote = str_replace("'", " ", $prenomFirstLetterMaj);
    
    $tel = htmlspecialchars($_POST['telBureau']);
    $mail = htmlspecialchars($_POST['mailBureau']);
    
    if($_POST['poste'] == "president"){
        $poste = "PRESIDENT";
    }
    else if($_POST['poste'] == "tresorier"){
        $poste = "TRESORIER";
    }
    else{
        $poste = "SECRETAIRE";
    }

    $nameImage = $_FILES['photoBureau']['name'];
    $imageTemp = $_FILES['photoBureau']['tmp_name'];

    if($nameImage == ''){
        $photo = 'images/logofinal.png';
        $requete = "INSERT INTO bureau VALUES (null, '$nomMaj', '$prenomSansQuote', '$poste', '$photo', '$tel', '$mail')";
        echo $requete;
        $bdd->exec($requete);

        session_start();
        $_SESSION['messageBureau'] = "Ajout bureau OK";

        header('location: ../vue/interfaceAdmin.php');
        exit();
    }
    else{
        //CONTROLE FICHIER//
	    if($_FILES['photoBureau']['error'] != 0){
		    //CONTROLE ERREUR
		    switch($_FILES['photoBureau']['error']){
		        case 1 :
			        echo 'Le fichier est trop lourd';
			        break;
			
			    case 3 :
			        echo 'le fichier a été chargé partiellement';
			        break;
			
			    case 6 :
			        echo 'pas de répertoire temporaire';
			        break;
		    }
	    }
	    else{
            //supprime espace nom fichier
	        $namenospace = str_replace(' ','',$nameImage);
	
	        //nom du fichier en minus
            $namelower = strtolower($namenospace);
            
	        //recupere extension fichier
	        $extension = pathinfo($namelower,PATHINFO_EXTENSION);
    
		
	        //tableau avec extension valide
	        $extensionOK = array('jpg','jpeg','gif','png');

            //verifie si l'extension est valide'
            if(in_array($extension, $extensionOK)){
			    $dossierImage = "images/imageUpload";
                //echo $nameImage. "</br>";
                //echo $imageTemp. "</br>";
                $imageChiffre = replaceRandom($nameImage);
                //echo $imageChiffre;
                move_uploaded_file($imageTemp, "../$dossierImage/$imageChiffre");
                $photo = "$dossierImage/$imageChiffre";
            
                $requete = "INSERT INTO bureau VALUES (null, '$nomMaj', '$prenomSansQuote', '$poste', '$photo', '$tel', '$mail')";
                //echo $requete;
                $bdd->exec($requete);

                session_start();
                $_SESSION['messageBureau'] = "Ajout bureau OK";

                header('location: ../vue/interfaceAdmin.php');
                exit();
            }
	        else{
	            echo 'Extension non valide (seulement jpg, jpeg, gif ou png)';
	        }
        }	       
    }
}
else{
    session_start();
    $_SESSION['messageErreurPoste'] = "Tu as oublié de cocher le poste";
    header('location: ../vue/interfaceAdmin.php');
}
