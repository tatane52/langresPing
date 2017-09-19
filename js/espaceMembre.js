// rafraichissement message tchat AJAX
$("#sendAjax").click(function(e) {
    e.preventDefault();
    var dernierId = $(".talk p:first").attr("id");
    var message = $("#messageAjax");
    var valeurMessage = message.val();
    var messageSansQuote = valeurMessage.replace("'", " ")

    if (valeurMessage != "") {
        $.ajax({
            url: '../model/traitementTchat.php', // La ressource ciblée
            type: 'POST', // Le type de la requête HTTP
            data: 'idMessage=' + dernierId + '&messageAjax=' + messageSansQuote, //paramètre
            dataType: 'html',
            success: function(code_html, statut) { //fonction en cas de succès
                $(".talk").prepend(code_html);
            }
        })
        message.val("");
    } else {
        alert("pas de message");
    }
});

setInterval(function autoRefresh(e) {
    var dernierId = $(".talk p:first").attr("id");
    $.ajax({
        url: '../model/autoRefresh.php', // La ressource ciblée
        type: 'GET', // Le type de la requête HTTP
        data: 'idMessage=' + dernierId, //paramètre
        dataType: 'html',
        success: function(code_html, statut) { //fonction en cas de succès
            $(".talk").prepend(code_html);
        }
    })
}, 30000);