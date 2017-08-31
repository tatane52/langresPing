$(document).ready(function() {

    function jour() {
        var recupJour = $("#jour");
        var option = "";
        for (var i = 1; i < 32; i++) {
            option += "<option id='jour" + i + "'>" + i + "</option>";
        }
        recupJour.html(option);
    }

    function mois() {
        var recupMois = $("#mois");
        var option = "<option id='mois1'>janvier</option><option id='mois2'>février</option><option id='mois3'>mars</option><option id='mois4'>avril</option><option id='mois5'>mai</option><option id='mois6'>juin</option><option id='mois7'>juillet</option><option id='mois8'>aout</option><option id='mois9'>septembre</option><option id='mois10'>octobtre</option><option id='mois11'>novembre</option><option id='mois12'>décembre</option>";
        recupMois.html(option);
    }



    var recupCache = $("#joueurCache");
    $("input[name='joueur']").change(function() {
        if ($("input[value='trois']:checked").val() == 'trois') {
            console.log($("input[value='trois']:checked").val());
            recupCache.html("<label>Nom : </label><input type='text'><label>Prenom : </label><input type='text'></br><label>Nom : </label><input type='text'><label>Prenom : </label><input type='text'></br><label>Nom : </label><input type='text'><label>Prenom : </label><input type='text'>");
        } else {
            console.log("else");
            recupCache.html("<label>Nom : </label><input type='text'><label>Prenom : </label><input type='text'></br><label>Nom : </label><input type='text'><label>Prenom : </label><input type='text'></br><label>Nom : </label><input type='text'><label>Prenom : </label><input type='text'></br><label>Nom : </label><input type='text'><label>Prenom : </label><input type='text'>")
        }
    });



    jour();
    mois();



});