<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" action="">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="submit" value="Envoyer">
    </form>
    <?php
    if (isset($_GET)) {
        foreach ($_GET as $nombre => $valor) {
            if ($valor % 2 == 0) {
                echo "<p>La valeur $valor est paire.</p>";
            } else {
                echo "<p>La valeur $valor est impaire.</p>";
            }
        }
    }
    ?>
</body>

</html>