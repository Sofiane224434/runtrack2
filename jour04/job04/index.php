<?php
$compteur = 0;
if (isset($_POST)) {
    foreach ($_POST as $key) {
        $compteur++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <form method="post" action="">
        <input type="text" name="prenom" placeholder="Prénom">
        <input type="text" name="nom" placeholder="Nom">
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($compteur > 0) {
        echo "<br>
        <table class=\"table-auto border-collapse border border-gray-400 mt-4\">
            <thead>
                <tr>
                    <th class=\"border border-gray-400 px-4 py-2\">Clé</th>
                    <th class=\"border border-gray-400 px-4 py-2\">Valeur</th>
                </tr>
            </thead>
            <tbody>";
        foreach ($_POST as $key => $value) {
            echo "<tr>
                    <td class=\"border border-gray-400 px-4 py-2\">$key</td>
                    <td class=\"border border-gray-400 px-4 py-2\">$value</td>
                </tr>";
        }
        echo "</tbody>
        </table>";
    }
    ?>
</body>

</html>