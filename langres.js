$(".lienHisto").click(function(e) {
    var larg = document.body.clientWidth;
    if (larg > 767) {
        var top = $("#historique").offset().top;
        e.preventDefault();
        window.scrollTo(0, top - 125);
    } else {
        var top = $("#historique").offset().top;
        e.preventDefault();
        window.scrollTo(0, top - 75);
    }
});

$(".lienEffect").click(function(e) {
    var larg = document.body.clientWidth;
    if (larg > 767) {
        var top = $("#effectif").offset().top;
        e.preventDefault();
        window.scrollTo(0, top - 125);
    } else {
        var top = $("#effectif").offset().top;
        e.preventDefault();
        window.scrollTo(0, top - 75);
    }
});

$(".lienCalend").click(function(e) {
    var larg = document.body.clientWidth;
    if (larg > 767) {
        var top = $("#calendrier").offset().top;
        e.preventDefault();
        window.scrollTo(0, top - 125);
    } else {
        var top = $("#calendrier").offset().top;
        e.preventDefault();
        window.scrollTo(0, top - 75);
    }
});

$(".lienCont").click(function(e) {
    var larg = document.body.clientWidth;
    if (larg > 767) {
        var top = $("#contact").offset().top;
        e.preventDefault();
        window.scrollTo(0, top - 125);
    } else {
        var top = $("#contact").offset().top;
        e.preventDefault();
        window.scrollTo(0, top - 75);
    }
});