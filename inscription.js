//check password
var mdp = $("#pwd");
var confirmMdp = $("#confirm");

confirmMdp.blur(function(e) {
    if (mdp.val().length == 0 && confirmMdp.val().length == 0) {
        mdp.css("backgroundColor", "white");
        confirmMdp.css("backgroundColor", "white");
    } else if (mdp.val() == confirmMdp.val()) {
        mdp.css("backgroundColor", "#3fb13f");
        confirmMdp.css("backgroundColor", "#3fb13f");
    } else {
        mdp.css("backgroundColor", "red");
        confirmMdp.css("backgroundColor", "red");
    }
});


$("#submit").click(function(e) {
    if (mdp.val() !== confirmMdp.val()) {
        e.preventDefault();
        $("#analyseMdp").html("les mots de passes sont différents");
    }
});


/*var recup = document.getElementById('pwd');
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

        //check password
        var recupBtnSubmit = document.getElementById('submit');
        var recupDivMdp = document.getElementById('analyseMdp');

        recupBtnSubmit.addEventListener('click', function(e) {
            if(recup.value !== recupConfirm.value){
                e.preventDefault();
                recupDivMdp.innerHTML = "les mots de passes sont différents"
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
            var recupDivDispo = document.getElementById('analysePseudo');
            
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