<!DOCTYPE html>
<!-- Page de connexion -->
<html>
    <head>
        <?php require "head.html" ?>
        <title>Nom Site - Mot de passe oublié </title>
    </head>
<body class="body">
    <header>
        <?php require "header.html" ?>
    </header>
    <div class="container" style="margin-top:7em">
        <h2 style="text-align:center;">Mot de passe oublié</h2>
    </div>
    <form action="/action_page.php">
        <div class="container jumbotron" style="width:50%;">
            <div class="container">            
            <h3 style="text-align:center;">Afin de retrouver votre mot de passe, indiquez votre pseudo (login)
             et votre e-mail </h3>
                <p><i class="glyphicon glyphicon-user"></i> Entrer votre pseudo</p>
                <input type="text" class="form-control" id="pseudo" placeholder="pseudo" name="pseudo">
            </div></br>
            <div class="container">            
                <p><i class="glyphicon glyphicon-envelope"></i> Entrer votre adresse e-mail</p>
                <input type="email" class="form-control" id="email" placeholder="Adresse e-mail" name="email">
            </div></br>
            <div style="text-align:center;">
                <button type="submit" class="button2 button1">Envoyer</button></br>
            </div>
        </div>
    </form>
    <footer>
        <?php require "footer.html" ?>
    </footer>
</body>

</html>