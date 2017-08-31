<?php

function replaceRandom($nameImage){
            $chiffreDebut = rand(1, 1000000);
            
            return $chiffreDebut.$nameImage;
        }

if(isset($_POST['sendPhoto'])){
    require_once('connectionBdd.php');
    $nameImage = $_FILES['photoCaroussel']['name'];
    $imageTemp = $_FILES['photoCaroussel']['tmp_name'];

    if($nameImage == ''){
        $photo = '../images/logoFinalPhoto.png';

        $requete = "INSERT INTO photo VALUES (null, '$photo')";
        $bdd->exec($requete);

        session_start();
        $_SESSION['messagePhoto'] = "Ajout photo ok";

        header('location: ../vue/interfaceAdmin.php');
        exit();
    }
    else{
        //CONTROLE FICHIER//
	    if($_FILES['photoCaroussel']['error'] != 0){
		    //CONTROLE ERREUR
		    switch($_FILES['photoCaroussel']['error']){
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
			    $dossierImage = "../images/imageUpload";
                //echo $nameImage. "</br>";
                //echo $imageTemp. "</br>";
                $imageChiffre = replaceRandom($nameImage);
                //echo $imageChiffre;
                move_uploaded_file($imageTemp, "$dossierImage/$imageChiffre");
                $photo = "$dossierImage/$imageChiffre";
            
                $requete = "INSERT INTO photo VALUES (null, '$photo')";
                $bdd->exec($requete);

                session_start();
                $_SESSION['messagePhoto'] = "Ajout photo ok";

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
    header('location: ../vue/interfaceAdmin.php');
    exit();
}
