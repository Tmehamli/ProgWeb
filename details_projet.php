<!DOCTYPE html>
<!-- Page details projet -->
<htlm>
    <head>
        <!-- appel des resources -->
        <?php require "head.html" ?>
        <title> Nom Site - Details Projet </title>
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
                    <button type="submit" class="button1 button1">Créer une nouvelle campagne
                            <i class="glyphicon glyphicon-plus"></i></button></br>
                    </form>
                </div>
            </div>
            <h2>Projet "var" > Mes campagnes</h2>
            <div class="row">
                <div class="col-sm-12">
                    <div class="container jumbotron" style="width:auto;">
                        <form action="details_campagnes.php">                        
                            <div class="row">
                                <div class="col-sm-4">
                                    Nom campagne 1
                                </div>
                                <div class="col-sm-4">
                                    Nombre de réponses : "var"
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="button3 button1">
                                        Details campagne 1
                                    </button></br>
                                </div>
                            </div>                            
                        </form>
                        <hr>
                        <form action="details_projet.php">                        
                            <div class="row">
                                <div class="col-sm-4">
                                    Nom campagne 2
                                </div>
                                <div class="col-sm-4">
                                    Nombre de réponses : "var"
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="button3 button1">
                                        Details campagne 2
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