var recupSectionHisto = document.getElementById('historique');
var recupSectionEffect = document.getElementById('effectif');
var recupSectionCalend = document.getElementById('calendrier');
var recupSectionCont = document.getElementById('contact');
var recupLienHisto = document.getElementsByClassName('lienHisto');
var recupLienEffect = document.getElementsByClassName('lienEffect');
var recupLienCalend = document.getElementsByClassName('lienCalend');
var recupLienCont = document.getElementsByClassName('lienCont');

recupLienHisto[0].addEventListener('click', function(e) {
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
recupLienHisto[1].addEventListener('click', function(e) {
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

recupLienEffect[0].addEventListener('click', function(e) {
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
recupLienEffect[1].addEventListener('click', function(e) {
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

recupLienCalend[0].addEventListener('click', function(e) {
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
recupLienCalend[1].addEventListener('click', function(e) {
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

recupLienCont[0].addEventListener('click', function(e) {
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
recupLienCont[1].addEventListener('click', function(e) {
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