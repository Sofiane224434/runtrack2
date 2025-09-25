<?php

session_start();

if (!isset($_SESSION["liste"])) {
    $_SESSION["liste"] = [];
}
if (isset($_POST["prenom"])) {
    if ($_POST["prenom"] !== "") {
        $_SESSION["liste"][] = $_POST["prenom"];
    }
}

if (isset($_POST["reset"])) {
    $_SESSION["liste"] = [];
    header("Location: index.php");
    exit();
}

//fonctions

function afficherListe($liste)
{
    $resultat = "";
    foreach ($liste as $prenom) {
        $resultat .= $prenom . "<br>";
    }
    return $resultat;
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
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez votre prénom">
        <button type="submit">Ajouter</button>
    </form>
    <p><?= afficherListe($_SESSION["liste"]); ?></p>
    <form method="post">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>
</body>

</html>