$(document).ready(function() {
    //function init() {

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


});

function calendrier() {
    //mois+annee au dessus du calendrier
    var date = new Date();
    var month = date.getMonth();
    var monthWords = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];
    var replaceMonth = monthWords[month];
    var year = date.getFullYear();
    $("#dateCalendrier").html(replaceMonth + " " + year);

    //calendrier
    if ((year % 4 === 0 & year % 100 !== 0) | (year % 400 === 0)) {
        var toto = "";
        var numberDaysOfMonth = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        /*for (var i = 0; i < numberDaysOfMonth[month]; i++) {
            toto += $("tbody").html("<tr>toto</tr>");
        }*/
    } else {
        var numberDaysOfMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        var toto = "";
        var numberDaysOfMonth = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        console.log(numberDaysOfMonth[month]);
        $("tbody").html("<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>");
        /*for (var i = 0; i < numberDaysOfMonth[month]; i++) {
            toto += $("tbody").html("<td><td/>");
        }
        $("tbody").html("</tr>");*/
    }

}