<!DOCTYPE html>
<!-- Page d'inscription -->
<html>
    <head>
        <?php require "head.html" ?>
        <title>Nom Site - S'inscrire </title>
    </head>
<body class="body">
    <header>
        <?php require "header.html" ?>
    </header>
    
    <div class="row">    
        <div class="col-sm-3 " style="margin-top:  35.9em;">  
            <div class="container jumbotron" style="width:100%;">
                <p style="text-align: center;">Expérimentateur</p>
                <ul>
                    <li> Ajouter/modifier/supprimer une campagne de test,</li>
                    <li> Ajouter/modifier supprimer des réponses,</li>
                    <li> Analyser les réponses,</li>
                    <li> Télécharger les résultats au format cs.</li>
                </ul> 
            </div>
        </div>
    <div class="col-sm-6">
        <div class="container row" style="margin-top:7em">
            <div class="col-sm-4 col-sm-offset-3">
            <h2>Inscription</h2>
    </div>
        </div>
        <form action="/action_page.php">
            <div class="container jumbotron" style="width:100%;">
                <div class="container">            
                    <p><i class="glyphicon glyphicon-user"></i> Entrer un pseudo</p>
                    <input type="text" class="form-control" id="pseudo" placeholder="pseudo" name="pseudo">
                </div></br>
                <div class="container">            
                    <p><i class="glyphicon glyphicon-envelope"></i> Entrer une adresse e-mail</p>
                    <input type="email" class="form-control" id="email" placeholder="Adresse e-mail" name="email">
                </div></br>
                <div class="container">
                    <p><i class="glyphicon glyphicon-lock"></i></span> Définir un mot de passe</p>
                    <input type="password" class="form-control" id="pwd" placeholder="Mot de passe" name="pwd"></br>
                    <input type="password" class="form-control" id="verife-pwd" placeholder="Vérifier mot de passe" name="verife-pwd">
                </div></br>            
                <div class="container">            
                    <p><i class="glyphicon glyphicon-cog"></i> Choisir un rôle</p>
                    <div class="row">
                        <div class="col-sm-4">                    
                        <label class="container">
                        <input type="radio" checked="checked" name="radio">Expérimentateur
                        <span class="checkmark"></span>
                        </div>
                        <div class="col-sm-4 col-sm-offset-4">                    
                        <label class="container" style="text-align: right;">
                        <input type="radio" name="radio">Utilisateur
                        </label>
                        </div>
                    </div>
                </div></br>
                <div style="text-align:center;">
                    <button type="submit" class="button1 button1">S'inscrire</button>
                </div>
            </div>
        </form>
    </div>
        <div class="col-sm-3"style="margin-top: 35.9em;">  
            <div class="container jumbotron" style="width:100%;">
                <p style="text-align: center;">Utilisateur</p>
                <ul>
                    <li> Remplir un questionnaire,</li>
                    <li> Avoir accès aux réponses données aux questionnaires (sans pouvoir modifier les réponses apportées). </li>
                </ul> 
            </div>
        </div>
    </div>

    <footer>
        <?php require "footer.html" ?>
    </footer>
</body>

</html> 