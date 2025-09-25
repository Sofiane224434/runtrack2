<?php
// Gérer la réinitialisation si le bouton est cliqué
if (isset($_POST["reset"])) {
    setcookie("nbvisites", 0, time() + 365 * 24 * 3600);
    header("Location: index.php");
    exit();
}

// Vérifier si le cookie existe et l'initialiser
if (!isset($_COOKIE["nbvisites"])) {
    $nbvisites = 1;
    setcookie("nbvisites", $nbvisites, time() + 365 * 24 * 3600);
} else {
    $nbvisites = $_COOKIE["nbvisites"] + 1;
    setcookie("nbvisites", $nbvisites, time() + 365 * 24 * 3600);
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
    <p>Nombre de visites : <?php echo isset($_COOKIE["nbvisites"]) ? $_COOKIE["nbvisites"] : $nbvisites; ?></p>
    <form method="post">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>
</body>

</html>