<?php
function occurrences($str, $char)
{
    $i = 0;
    $compteur = 0;
    while (isset($str[$i])) {
        if ($str[$i] == $char) {
            $compteur++;
        }
        $i++;
    }
    return $compteur;
}
?>
<!-- Additionnel : affichage sur une page -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Le nombre d'occurences est : <?= occurrences("Je suis le petit garçon", "e"); ?></p>
</body>

</html>