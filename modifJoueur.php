<?php

function replaceRandom($nameImage){
            $chiffreDebut = rand(1, 1000000);
            
            return $chiffreDebut.$nameImage;
        }

if(isset($_POST['sendJoueur']) && !empty($_POST['nomJoueur']) && !empty($_POST['prenomJoueur'])){
    require_once('connectionBdd.php');
    //htmlentities ne marche pas avec str_replace
    $nom = htmlspecialchars($_POST['nomJoueur']);  
    $accents = array('é', 'è', 'ê', 'ë', 'ï', 'î', 'à', 'â', 'ä', 'û', 'ü');
    $accentsMaj = array('E', 'E', 'E', 'E', 'I', 'I', 'A', 'A', 'A', 'U', 'U');
    $nomSansAccent = str_replace($accents, $accentsMaj, $nom);  
    $nomMaj = strtoupper($nomSansAccent);

    $prenom = htmlspecialchars($_POST['prenomJoueur']);
    $prenomFirstLetterMaj = ucfirst($prenom);
    
    $nameImage = $_FILES['photoJoueur']['name'];
    $imageTemp = $_FILES['photoJoueur']['tmp_name'];

    if($nameImage == ''){
        $photo = 'logofinal.png';
        $requete = "INSERT INTO joueur VALUES (null, '$nomMaj', '$prenomFirstLetterMaj', '$photo')";
        //echo $requete;
        $bdd->exec($requete);
        header('location: interfaceAdmin.php');
        exit();
    }
    else{
        //CONTROLE FICHIER//
	    if($_FILES['photoJoueur']['error'] != 0){
		    //CONTROLE ERREUR
		    switch($_FILES['photoJoueur']['error']){
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
			    $dossierImage = "imageUpload";
                //echo $nameImage. "</br>";
                //echo $imageTemp. "</br>";
                $imageChiffre = replaceRandom($nameImage);
                //echo $imageChiffre;
                move_uploaded_file($imageTemp, "$dossierImage/$imageChiffre");
                $photo = "$dossierImage/$imageChiffre";
            
                $requete = "INSERT INTO joueur VALUES (null, '$nomMaj', '$prenomFirstLetterMaj', '$photo')";
                //echo $requete;
                $bdd->exec($requete);
                header('location: interfaceAdmin.php');
                exit();
            }
	        else{
	            echo 'Extension non valide (seulement jpg, jpeg, gif ou png)';
	        }
        }	       
    }
}
else{
    header('location: interfaceAdmin.php');
    exit();
}
?>