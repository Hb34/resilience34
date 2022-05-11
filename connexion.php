<?php

function SendMail()
{
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "hassan_benz@hotmail.fr";
    $to = "hassan.benzaid@epsi.fr";
    $subject = "Double authentification";
    $message = "PHP Mail fonctionne parfaitement";
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    echo "L'email a été envoyé.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résilience 34</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="bootstrap/jquery/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    
</head>
<body>
<?php include "nav.php" ?>

    <section>
        <div>
            <div class="sidenav">
                <div class="login-main-text">
                    <h2>Résilience 34</h2>
                    <h2>Page de Connexion</h2>
                <p>Connectez-vous ou enregistrez-vous à partir d'ici pour y accéder.</p>
                </div>
            </div>
            <div class="main">
                <div class="col-md-6 col-sm-12">
                <div class="login-form">
                    <form action="googleAthentification.php" method="post">
                        <div class="form-group">
                            <label>Nom d'utilisateur</label>
                            <input type="text" id="username" class="form-control" required="required" placeholder="Veuillez entrer votre login">
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" id="password" class="form-control" required="required" placeholder="Veuillez entrer votre Mot de passe" >
                        </div>
                        <button type="submit" onclick="SendMail()" class="btn btn-black">Se connecter</button>
                        <a href="inscription.html" onclick="SendMail()" class="btn btn-secondary" role="button">S'enregistrer</a>
                    </form> 
                </div>
                </div>
            </div>       
        </div>
    </section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- Footer -->
<?php include "footer.php" ?>
</body>
</html>