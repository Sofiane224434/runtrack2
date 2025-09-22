<?php
$compteur = 0;
if (isset($_GET)) {
    foreach ($_GET as $key) {
        $compteur++;
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
    <form method="get" action="">
        <input type="text" name="prenom" placeholder="Prénom">
        <input type="text" name="nom" placeholder="Nom">
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($compteur > 0) {
        echo "<br><p>La superglobale \$_GET a été utilisée $compteur fois.</p>";
    }
    ?>
</body>

</html>