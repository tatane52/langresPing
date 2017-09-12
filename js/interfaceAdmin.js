$(document).ready(function() {

    var recupCache = $("#joueurCache");
    $("input[name='joueur']").change(function() {
        if ($("input[value='trois']:checked").val() == 'trois') {
            recupCache.html("<label class='col-xs-12 col-sm-2' for='nomConvoc1'>Nom 1</label>" +
                "<input class='col-xs-12 col-sm-4' type='text' name='nomConvoc1' id='nomConvoc1' maxlength='20' required>" +
                "<label class='col-xs-12 col-sm-2' for='prenomConvoc1'>Prenom 1</label>" +
                "<input class='col-xs-12 col-sm-4' type='text' name='prenomConvoc1' id='prenomConvoc1' maxlength='20' required>" +
                "<label class='col-xs-12 col-sm-2' for='nomConvoc2'>Nom 2</label>" +
                "<input class='col-xs-12 col-sm-4' type='text' name='nomConvoc2' id='nomConvoc2' maxlength='20' required>" +
                "<label class='col-xs-12 col-sm-2' for='prenomConvoc2'>Prenom 2</label>" +
                "<input class='col-xs-12 col-sm-4' type='text' name='prenomConvoc2' id='prenomConvoc2' maxlength='20' required></br>" +
                "<label class='col-xs-12 col-sm-2' for='nomConvoc3'>Nom 3</label>" +
                "<input class='col-xs-12 col-sm-4' type='text' name='nomConvoc3' id='nomConvoc3' maxlength='20' required>" +
                "<label class='col-xs-12 col-sm-2' for='prenomConvoc3'>Prenom 3</label>" +
                "<input class='col-xs-12 col-sm-4' type='text' name='prenomConvoc3' id='prenomConvoc3' maxlength='20' required>");
        } else {
            recupCache.html("<label class='col-xs-12 col-sm-2' for='nomConvoc1'>Nom 1</label>" +
                "<input class='col-xs-12 col-sm-4' type='text' name='nomConvoc1' id='nomConvoc1' maxlength='20' required>" +
                "<label class='col-xs-12 col-sm-2' for='prenomConvoc1'>Prenom 1</label>" +
                "<input class='col-xs-12 col-sm-4' type='text' name='prenomConvoc1' id='prenomConvoc1' maxlength='20' required></br>" +
                "<label class='col-xs-12 col-sm-2' for='nomConvoc2'>Nom 2</label>" +
                "<input class='col-xs-12 col-sm-4' type='text' name='nomConvoc2' id='nomConvoc2' maxlength='20' required>" +
                "<label class='col-xs-12 col-sm-2' for='prenomConvoc2'>Prenom 2</label>" +
                "<input class='col-xs-12 col-sm-4' type='text' name='prenomConvoc2' id='prenomConvoc2' maxlength='20' required></br>" +
                "<label class='col-xs-12 col-sm-2' for='nomConvoc3'>Nom 3</label>" +
                "<input class='col-xs-12 col-sm-4' type='text' name='nomConvoc3' id='nomConvoc3' maxlength='20' required>" +
                "<label class='col-xs-12 col-sm-2' for='prenomConvoc3'>Prenom 3</label>" +
                "<input class='col-xs-12 col-sm-4' type='text' name='prenomConvoc3' id='prenomConvoc3' maxlength='20' required></br>" +
                "<label class='col-xs-12 col-sm-2' for='nomConvoc4'>Nom 4</label>" +
                "<input class='col-xs-12 col-sm-4' type='text' name='nomConvoc4' id='nomConvoc4' maxlength='20' required>" +
                "<label class='col-xs-12 col-sm-2' for='prenomConvoc4'>Prenom 4</label>" +
                "<input class='col-xs-12 col-sm-4' type='text' name='prenomConvoc4' id='prenomConvoc4' maxlength='20' required>");
        }
    });
});