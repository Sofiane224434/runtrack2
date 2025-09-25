<?php

session_start();



//functions
function vues()
{
    if (isset($_POST["prenom"])) {
        echo "Bonjour " . $_POST["prenom"];
        echo "<form method=\"post\">
        <button type=\"submit\" name=\"deconnexion\">Déconnexion</button>
    </form>";
    } else {
        echo "<h1>Bienvenue sur notre site !</h1>";
        echo "<form method=\"post\">
        <input type=\"text\" name=\"prenom\" placeholder=\"Entrez votre prénom\">
        <button type=\"submit\">Connexion</button>
    </form>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php vues(); ?>
</body>

</html>