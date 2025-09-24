<?php
function leetSpeak($str)
{
    $i = 0;
    while (isset($str[$i])) {
        switch ($str[$i]) {
            case "A":
            case "a":
                $str[$i] = "4";
                break;
            case "B":
            case "b":
                $str[$i] = "8";
                break;
            case "E":
            case "e":
                $str[$i] = "3";
                break;
            case "G":
            case "g":
                $str[$i] = "6";
                break;
            case "L":
            case "l":
                $str[$i] = "1";
                break;
            case "S":
            case "s":
                $str[$i] = "5";
                break;
            case "T":
            case "t":
                $str[$i] = "7";
                break;
            default:
                break;
        }
        $i++;
    }
    return $str;
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
    <p><?= leetSpeak("Je m'appelle Sofiane et j'ai 19ans"); ?></p>
</body>

</html>