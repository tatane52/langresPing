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
            recupCache.html("<label for='nomConvoc1'>Nom : </label><input type='text' name='nomConvoc1' id='nomConvoc1' maxlength='20' required><label for='prenomConvoc1'> Prenom : </label><input type='text' name='prenomConvoc1' id='prenomConvoc1' maxlength='20' required></br><label for='nomConvoc2'>Nom : </label><input type='text' name='nomConvoc2' id='nomConvoc2' maxlength='20' required><label for='prenomConvoc2'> Prenom : </label><input type='text' name='prenomConvoc2' id='prenomConvoc2' maxlength='20' required></br><label for='nomConvoc3'>Nom : </label><input type='text' name='nomConvoc3' id='nomConvoc3' maxlength='20' required><label for='prenomConvoc3'> Prenom : </label><input type='text' name='prenomConvoc3' id='prenomConvoc3' maxlength='20' required>");
        } else {
            recupCache.html("<label for='nomConvoc1'>Nom : </label><input type='text' name='nomConvoc1' id='nomConvoc1' maxlength='20' required><label for='prenomConvoc1'> Prenom : </label><input type='text' name='prenomConvoc1' id='prenomConvoc1' maxlength='20' required></br><label for='nomConvoc2'>Nom : </label><input type='text' name='nomConvoc2' id='nomConvoc2' maxlength='20' required><label for='prenomConvoc2'> Prenom : </label><input type='text' name='prenomConvoc2' id='prenomConvoc2' maxlength='20' required></br><label for='nomConvoc3'>Nom : </label><input type='text' name='nomConvoc3' id='nomConvoc3' maxlength='20' required><label for='prenomConvoc3'> Prenom : </label><input type='text' name='prenomConvoc3' id='prenomConvoc3' maxlength='20' required></br><label for='nomConvoc4'>Nom : </label><input type='text' name='nomConvoc4' id='nomConvoc4' maxlength='20' required><label for='prenomConvoc4'> Prenom : </label><input type='text' name='prenomConvoc4' id='prenomConvoc4' maxlength='20' required>")
        }
    });



    jour();
    mois();



});