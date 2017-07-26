// rafraichissement message tchat AJAX
var dernierId = $(".talk p:first").attr("id");
console.log(dernierId);

$("#refreshAjax").click(function(e) {
    $.ajax({
        url: 'refreshTchatMembre.php', // La ressource ciblée
        type: 'GET', // Le type de la requête HTTP
        data: 'idMessage=' + dernierId, //paramètre
        success: function(code_html, statut) { //fonction en cas de succès
            console.log(code_html);
            $(".talk").prepend(code_html);
        }
    })
});