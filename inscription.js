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



// vérification pseudo unique AJAX
var recupInputPseudo = $("#pseudo");
recupInputPseudo.blur(function(e) {
    var recupValuePseudo = recupInputPseudo.val();
    $.ajax({
        url: 'pseudo.php', // La ressource ciblée
        type: 'GET', // Le type de la requête HTTP
        data: 'pseudo=' + recupValuePseudo, //paramètre
        success: function(code_html, statut) { //fonction en cas de succès
            if (code_html == true) {
                alert(recupValuePseudo + " n'est pas dispo. Merci d'en choisir un autre");
                recupInputPseudo.val("");
            }

        }
    })
})


//requete AJAX pour pseudo
/*function getXMLHttpRequest() {
    var xhr = null;

    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
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

var xhr = getXMLHttpRequest();*/
/*recupInputPseudo.addEventListener('blur', function() {
    var recupValuePseudo = recupInputPseudo.value;
    //console.log("pseudo.php?pseudo=" +recupValuePseudo);
    xhr.open("GET", "pseudo.php?pseudo=" + recupValuePseudo, true);
    xhr.send(null);

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            //console.log(xhr.responseText);
            if (xhr.responseText == true) {

                alert(recupValuePseudo + " n'est pas dispo. Merci d'en choisir un autre");
                recupInputPseudo.value = "";
            }

        }
    }



});*/