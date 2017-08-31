// rafraichissement message tchat AJAX


$("#sendAjax").click(function(e) {
    e.preventDefault();
    //console.log($("#messageAjax").val());
    var dernierId = $(".talk p:first").attr("id");
    console.log(dernierId);
    var message = $("#messageAjax") //.val();
    var valeurMessage = message.val();

    if (valeurMessage != "") {
        //console.log(message);
        $.ajax({
            url: '../model/traitementTchat.php', // La ressource ciblée
            type: 'POST', // Le type de la requête HTTP
            data: 'idMessage=' + dernierId + '&messageAjax=' + valeurMessage, //paramètre
            dataType: 'html',
            success: function(code_html, statut) { //fonction en cas de succès
                //console.log(code_html);
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
    //console.log(dernierId);
    $.ajax({
        url: '../model/autoRefresh.php', // La ressource ciblée
        type: 'GET', // Le type de la requête HTTP
        data: 'idMessage=' + dernierId, //paramètre
        dataType: 'html',
        success: function(code_html, statut) { //fonction en cas de succès
            //console.log(code_html);
            $(".talk").prepend(code_html);
        }
    })
}, 5000);