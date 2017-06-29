 <?php 
require_once('connectionBdd.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>inscription ping</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="inscription.css" />
</head>

<body>
    <!--inclusion d'entête php-->
    <?php include('enTeteAnnexe.php'); ?>
    <!--fin inclusion-->

    <form method="post" action="inscriptionResult.php">

        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="name">Nom(*) :</label>
            <input type="text" name="nom" class="form-control" id="name" maxlength="25" required>
        </div>
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="firstname">Prénom(*) :</label>
            <input type="text" name="prenom" class="form-control" id="firstname" maxlength="25" required>
        </div>
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="pwd">Mot de passe(*) :</label>
            <input type="password" name="mdp" class="form-control" id="pwd" required>
            <div id="taille"></div>
        </div>
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="confirm">Confirmation mot de passe(*) :</label>
            <input type="password" name="confirmMdp" class="form-control" id="confirm" required>
        </div>
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="pseudo">Pseudo(*) :</label>
            <input type="text" name="pseudo" class="form-control" id="pseudo" maxlength="20" required>
            <div id="analyse"></div>
        </div>
        
        <!--<div class="form-group col-xs-offset-2 col-xs-8">
            <label for="phone">N° tel :</label>
            <input type="tel" class="form-control" id="phone" placeholder="0505050505" pattern="^0[1-9][0-9]{8}$">
        </div>-->
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="email">Email(*) :</label>
            <input type="email" name="mail" class="form-control" id="email" pattern="^[a-z0-9.-_]+@[a-z0-9.-_]{2,}\.[a-z]{2,4}$" required>
        </div>

        
        <!--<div class="form-group col-xs-offset-2 col-xs-8">
            <label for="message">Message :</label></br>
            <textarea id="message" placeholder="agrandissez le cadre avec le coin bas/droite" resize="both"></textarea>
        </div>-->
        <button type="submit" class="btn-primary col-xs-offset-2 col-xs-3">Envoyer</button>
        <button type="reset" class="btn-danger col-xs-offset-2 col-xs-3">Reset</button>
    </form>

    
    <script>
        var recup = document.getElementById('pwd');
        var recupConfirm = document.getElementById('confirm');
        var recupTaille = document.getElementById('taille');

        recupConfirm.addEventListener('blur', function() {
            if (recup.value.length == 0 && recupConfirm.value.length == 0){
                recup.style.backgroundColor = 'white';
                recupConfirm.style.backgroundColor = 'white';
            }
            else if (recup.value == recupConfirm.value) {
                recup.style.backgroundColor = '#3fb13f';
                recupConfirm.style.backgroundColor = '#3fb13f';
            }
             else {
                recup.style.backgroundColor = 'red';
                recupConfirm.style.backgroundColor = 'red';
            }
        });
        
        //requete AJAX pour pseudo
        function getXMLHttpRequest() {
	    var xhr = null;
	
	        if (window.XMLHttpRequest || window.ActiveXObject) {
		        if (window.ActiveXObject) {
			        try {
				        xhr = new ActiveXObject("Msxml2.XMLHTTP");
			        } catch(e) {
				        xhr = new ActiveXObject("Microsoft.XMLHTTP");
			        }
		        } else {
			        xhr = new XMLHttpRequest(); 
		        }
	        } else {
		        alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
		        return null;
	        }
	
	        return xhr;
            }

            var recupInputPseudo = document.getElementById('pseudo');
            var recupDivDispo = document.getElementById('analyse');
            
            var xhr = getXMLHttpRequest();

            recupInputPseudo.addEventListener('blur', function(){
                var recupValuePseudo = recupInputPseudo.value;
                //console.log("pseudo.php?pseudo=" +recupValuePseudo);
                xhr.open("GET", "pseudo.php?pseudo=" +recupValuePseudo, true); 
                xhr.send(null); 

                xhr.onreadystatechange = function() {
                    if(xhr.readyState == 4){
                        //console.log(xhr.responseText);
                        if(xhr.responseText == true){
                            
                            alert(recupValuePseudo+ " n'est pas dispo. Merci d'en choisir un autre");
                            recupInputPseudo.value = "";
                        }                 
                         
                    }
                }
                
	            
               
            });
	 
	        


        
        /*recup.addEventListener('keypress', function() {
            var recupMdp = document.getElementById('pwd').value;
           
            if (recupMdp.length < 8) {
                recupTaille.innerHTML = 'trop petit';
                recupTaille.style.color = "red";
            
            } else {
                recupTaille.innerHTML = 'ok';
                recupTaille.style.color = "#3fb13f";
            }
        });*/
    </script>
</body>
</html>