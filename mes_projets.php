<!DOCTYPE html>
<!-- Page d'affichage des campagnes -->
<htlm>
    <head>
        <!-- appel des resources -->
        <?php require "head.html" ?>
        <title> Nom Site - Mes campagnes</title>
    </head>
    
    <body class="body">  
        <header>
            <!-- appel de la bar de navigation -->
            <?php require "header.html" ?>
        </header>

        <!-- permet que la bar de navigation ne cache pas le texte -->
        <div class="container" style="margin-top:9em">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <form action="/action_page2.php">
                    <button type="submit" class="button1 button1">Créer un nouveau projet  
                            <i class="glyphicon glyphicon-plus"></i></button></br>
                    </form>
                </div>
            </div>
            <h2>Mes Projets</h2>
            <div class="row">
                <div class="col-sm-8">
                    <div class="container jumbotron" style="width:auto;">
                        <form action="details_projet.php">                        
                            <div class="row">
                                <div class="col-sm-4">
                                    Nom Projet 1
                                </div>
                                <div class="col-sm-4">
                                    Nombre de campagnes projet 1
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="button3 button1">
                                        Details projet1
                                    </button></br>
                                </div>
                            </div>                            
                        </form>
                        <hr>
                        <form action="details_projet.php">                        
                            <div class="row">
                                <div class="col-sm-4">
                                    Nom Projet 2
                                </div>
                                <div class="col-sm-4">
                                    Nombre de campagnes projet 2
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="button3 button1">
                                        Details projet2
                                    </button></br>
                                </div>
                            </div>                            
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <!-- appel du footer-->
            <?php require "footer.html" ?>
        </footer>
    </body>

</html>
