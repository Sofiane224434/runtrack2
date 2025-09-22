<?php

if (isset($_POST)) {
    $largeur = $_POST["largeur"];
    $hauteur = $_POST["hauteur"];

    if ($largeur > 0) {
        for ($i = $largeur; $i >= 1; $i--) {
            for ($k = 0; $k <= $i + 1; $k++) {
                echo "&nbsp;";
            }
            echo "/";
            //echo "&nbsp;";
            for ($u = 0; $u < $largeur - $i; $u++) {
                echo "_";
            }
            echo "\\" . "<br>";
        }
    }
    /*toit*/
    $largeur = $_POST["largeur"];
    $hauteur = $_POST["hauteur"] - 1;
    echo "&nbsp;/";
    for ($i = 0; $i < $largeur + 1; $i++) {
        echo "_";
    }
    echo "\\";
    echo "<br>";
    /*rectangle sans toit*/
    for ($i = 0; $i < $hauteur; $i++) {
        echo "|";
        for ($j = 0; $j < $largeur; $j++) {
            echo "&nbsp;&nbsp;";
        }
        echo "&nbsp;&nbsp;&nbsp;";
        echo " |<br>";
    }
    echo "| ";
    for ($i = 0; $i <= $largeur; $i++) {
        echo "_";
    }
    echo " |";
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
    <form method="post" action="">
        <input type="text" name="largeur" placeholder="Largeur">
        <input type="text" name="hauteur" placeholder="Hauteur">
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>