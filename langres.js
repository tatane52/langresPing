var recupSectionHisto = document.getElementById('historique');
var recupSectionEffect = document.getElementById('effectif');
var recupSectionCalend = document.getElementById('calendrier');
var recupSectionCont = document.getElementById('contact');
var recupLienHisto = document.getElementById('lienHisto');
var recupLienEffect = document.getElementById('lienEffect');
var recupLienCalend = document.getElementById('lienCalend');
var recupLienCont = document.getElementById('lienCont');

recupLienHisto.addEventListener('click', function(e) {
    var larg = document.body.clientWidth;
    if (larg > 767) {
        var top = recupSectionHisto.offsetTop;
        e.preventDefault();
        window.scrollTo(0, top - 130);
    } else {
        var top = recupSectionHisto.offsetTop;
        e.preventDefault();
        window.scrollTo(0, top - 80);
    }
});

recupLienEffect.addEventListener('click', function(e) {
    var larg = document.body.clientWidth;
    if (larg > 767) {
        var top = recupSectionEffect.offsetTop;
        e.preventDefault();
        window.scrollTo(0, top - 130);
    } else {
        var top = recupSectionEffect.offsetTop;
        e.preventDefault();
        window.scrollTo(0, top - 80);
    }
});

recupLienCalend.addEventListener('click', function(e) {
    var larg = document.body.clientWidth;
    if (larg > 767) {
        var top = recupSectionCalend.offsetTop;
        e.preventDefault();
        window.scrollTo(0, top - 130);
    } else {
        var top = recupSectionCalend.offsetTop;
        e.preventDefault();
        window.scrollTo(0, top - 80);
    }
});

recupLienCont.addEventListener('click', function(e) {
    var larg = document.body.clientWidth;
    if (larg > 767) {
        var top = recupSectionCont.offsetTop;
        e.preventDefault();
        window.scrollTo(0, top - 130);
    } else {
        var top = recupSectionCont.offsetTop;
        e.preventDefault();
        window.scrollTo(0, top - 80);
    }
});