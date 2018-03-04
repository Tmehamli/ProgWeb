<!DOCTYPE html>
<!-- Page de connexion -->
<html>
    <head>
        <?php require "head.html" ?>
        <title>Nom Site - Connexion </title>
    </head>
<body class="body">
    <header>
        <?php require "header.html" ?>
    </header>
    <div class="container" style="margin-top:100px">
        <h2 style="text-align:center;">Connexion</h2>
    </div>
    <form action="/action_page.php">
        <div class="container jumbotron" style="width:50%;">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" id="pseudo" placeholder="Entrer votre pseudo" name="pseudo">
            </div></br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" id="pwd" placeholder="Entrer votre mot de passe" name="pwd">
            </div></br>
            <div style="text-align:center;">
                <button type="submit" class="button1 button1">Se connecter</button></br>
                <a href="mdp_oublie.php">Mot de passe oublié ?</a></br>
                <a href="inscription.php">Créer un compte</a></br>
            </div>
        </div>
    </form>
    <footer>
        <?php require "footer.html" ?>
    </footer>
</body>

</html>