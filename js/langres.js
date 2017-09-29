$(document).ready(function() {

    $(".lienHisto").click(function(e) {
        //récupération de la largeur de la fenêtre
        var larg = document.body.clientWidth;
        //récupération du décalage entre la section et le haut de la page
        var top = $("#historique").offset().top;
        //annulation du positionnement par défaut
        e.preventDefault();
        if (larg > 767) {
            //mise en place de la page au bon endroit (position x, position y)
            window.scrollTo(0, top - 125);
        } else {
            window.scrollTo(0, top - 75);
        }
    });

    $(".lienEffect").click(function(e) {
        var larg = document.body.clientWidth;
        console.log(larg);
        var top = $("#effectif").offset().top;
        console.log(top);
        e.preventDefault();
        if (larg > 767) {
            window.scrollTo(0, top - 125);
        } else {
            window.scrollTo(0, top - 75);
        }
    });

    $(".lienCalend").click(function(e) {
        var larg = document.body.clientWidth;
        var top = $("#calendrier").offset().top;
        e.preventDefault();
        if (larg > 767) {
            window.scrollTo(0, top - 125);
        } else {
            window.scrollTo(0, top - 75);
        }
    });

    $(".lienCont").click(function(e) {
        var larg = document.body.clientWidth;
        var top = $("#contact").offset().top;
        e.preventDefault();
        if (larg > 767) {
            window.scrollTo(0, top - 125);
        } else {
            window.scrollTo(0, top - 75);
        }
    });

    $("#myModal").modal("show")

});