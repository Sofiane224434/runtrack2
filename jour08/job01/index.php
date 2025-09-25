<?php

session_start();

// Vérifier si la variable de session existe et l'initialiser
if (!isset($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"] = 0;
} else {
    $_SESSION["nbvisites"]++;
}

if (isset($_POST["reset"])) {
    $_SESSION["nbvisites"] = 0;
    header("Location: index.php");
    exit();
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
    <h1>Bienvenue sur notre site !</h1>
    <p>Nombre de visites : <?= $_SESSION["nbvisites"]; ?></p>
    <form method="post">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>
</body>

</html>