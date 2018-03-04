<!DOCTYPE html>
<!-- Page d'acceuil du site -->
<htlm>
    <head>
        <!-- appel des resources -->
        <?php require "head.html" ?>
        <title> Nom Site </title>
    </head>
    
    <body class="body">  
        <header>
            <!-- appel de la bar de navigation -->
            <?php require "header.html" ?>
        </header>

        <!-- permet que la bar de navigation ne cache pas le texte -->
        <div class="container" style="margin-top:9em">
            <p class="text-index">Créer vos propres campagnes de recueil</br>
                du ressenti des utilisateurs</p></br>
                <img src="../images/questionnaire.png" alt="Questionnaire" style="max-width:35%;height:auto;">
        </div>
        <form <form action="connexion.php">
            <div class="container" style="margin-left:50%">      
                <button type="submit" class="button3 button1">C'est parti &#9654;</button>        
            </div>
        </form>
        <footer>
            <!-- appel du footer-->
            <?php require "footer.html" ?>
        </footer>
    </body>

</html>
