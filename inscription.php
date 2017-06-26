<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>inscription ping</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="inscription.css" />
</head>

<body>
    <!--inclusion d'entête php-->
    <?php include('enTeteAnnexe.php'); ?>
    <!--fin inclusion-->

    <form method="post" action="resultInscription.php">

        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="name">Nom(*) :</label>
            <input type="text" class="form-control" id="name" maxlength="25" required>
        </div>
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="firstname">Prénom(*) :</label>
            <input type="text" class="form-control" id="firstname" maxlength="25" required>
        </div>
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="pwd">Mot de passe(*) :</label>
            <input type="password" class="form-control" id="pwd" required>
            <div id="taille"></div>
        </div>
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="confirm">Confirmation mot de passe(*) :</label>
            <input type="password" class="form-control" id="confirm" required>
        </div>
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="pseudo">Pseudo(*) :</label>
            <input type="text" class="form-control" id="pseudo" maxlength="20" required>
        </div>
        <!--<div class="form-group col-xs-offset-2 col-xs-8">
            <label for="phone">N° tel :</label>
            <input type="tel" class="form-control" id="phone" placeholder="0505050505" pattern="^0[1-9][0-9]{8}$">
        </div>-->
        <div class="form-group col-xs-offset-2 col-xs-8">
            <label for="email">Email(*) :</label>
            <input type="email" class="form-control" id="email" pattern="^[a-z0-9.-_]+@[a-z0-9.-_]{2,}\.[a-z]{2,4}$" required>
        </div>
        
        <!--<div class="form-group col-xs-offset-2 col-xs-8">
            <label for="message">Message :</label></br>
            <textarea id="message" placeholder="agrandissez le cadre avec le coin bas/droite" resize="both"></textarea>
        </div>-->
        <button type="submit" class="btn-primary col-xs-offset-2 col-xs-3">Envoyer</button>
        <button type="reset" class="btn-danger col-xs-offset-2 col-xs-3">Reset</button>
    </form>

    <?php
    
    ?>
    <script>
        var recup = document.getElementById('pwd');
        var recupConfirm = document.getElementById('confirm');
        var recupTaille = document.getElementById('taille');

        recupConfirm.addEventListener('blur', function() {
            if (recup.value == recupConfirm.value) {
                recup.style.backgroundColor = '#3fb13f';
                recupConfirm.style.backgroundColor = '#3fb13f';
            } else {
                recup.style.backgroundColor = 'red';
                recupConfirm.style.backgroundColor = 'red';
            }
        });

        /*recup.addEventListener('keypress', function() {
            var recupMdp = document.getElementById('pwd').value;
           
            if (recupMdp.length < 8) {
                recupTaille.innerHTML = 'trop petit';
                recupTaille.style.color = "red";
            
            } else {
                recupTaille.innerHTML = 'ok';
                recupTaille.style.color = "#3fb13f";
            }
        });*/
    </script>
</body>

</html>