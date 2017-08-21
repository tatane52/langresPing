<?php

function replaceRandom($nameImage){
            $chiffreDebut = rand(1, 1000000);
            
            return $chiffreDebut.$nameImage;
        }

if(isset($_POST['sendArticle']) && !empty($_POST['title']) && !empty($_POST['contenu'])){
    require_once('connectionBdd.php');

    $titre = htmlspecialchars($_POST['title']);
    $caracteresSpeciaux = ['é', 'è', 'ê', 'ë', 'ï', 'î', 'ô', 'ö', 'à', 'â', 'ä', 'û', 'ü', 'ù', 'ç', '\''];
    $caracteresSpeciauxMaj = ['E', 'E', 'E', 'E', 'I', 'I', 'O', 'O', 'A', 'A', 'A', 'U', 'U', 'U', 'C', ' '];
    //attention str_replace ne fonctionne pas avec htmlentities
    $titreSansCaracSpeciaux = str_replace($caracteresSpeciaux, $caracteresSpeciauxMaj, $titre);
    $titreMajuscule = strtoupper($titreSansCaracSpeciaux);

    $contenu = htmlspecialchars($_POST['contenu']);
    $contenuSansQuote = str_replace('\'', ' ', $contenu);

    $date = date('Y-m-d');

    $nameImage = $_FILES['photoArticle']['name'];
    $imageTemp = $_FILES['photoArticle']['tmp_name'];

    if($nameImage == ''){
        $photo = 'logofinal.png';
        $requete = "INSERT INTO article VALUES (null, '$titreMajuscule', '$contenuSansQuote', '$date', '$photo')";
        $bdd->exec($requete);

        session_start();
        $_SESSION['messageArticle'] = "Ajout article OK";
        
        header('location: interfaceAdmin.php');
        exit();
    }
    else{
        //CONTROLE FICHIER//
	    if($_FILES['photoArticle']['error'] != 0){
		    //CONTROLE ERREUR
		    switch($_FILES['photoArticle']['error']){
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
            
                $requete = "INSERT INTO article VALUES (null, '$titreMajuscule', '$contenuSansQuote', '$date', '$photo')";
                $bdd->exec($requete);

                session_start();
                $_SESSION['messageArticle'] = "Ajout article OK";

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
