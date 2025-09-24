<?php
//fonctions
function post()
{
    if (isset($_POST["fonction"]) && isset($_POST["str"])) {
        $str = $_POST["str"];
        $fonction = $_POST["fonction"];
        switch ($fonction) {
            case "gras":
                return gras($str);
            case "cesar":
                $decalage = $_POST["decalage"];
                return cesar($str, $decalage);
            case "plateforme":
                return plateforme($str);
            default:
                return "Fonction non reconnue";
        }
    }
    return "";
}
function split_mots($str)
{
    $mots = [''];
    $i = 0;
    $im = 0;
    while (isset($str[$i])) {
        if ($str[$i] == " ") {
            $im++;
            $mots[$im] = '';
        } else {
            if (!isset($mots[$im])) {
                $mots[$im] = $str[$i];
            } else {
                $mots[$im] = $mots[$im] . $str[$i];
            }
        }
        $i++;
    }
    return $mots;
}
function gras($str)
{
    $mots = split_mots($str);
    $str = "";
    $maj = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    foreach ($mots as $mot) {
        $estMajuscule = false;
        foreach ($maj as $letter) {
            if ($mot[0] === $letter) {
                $str .= "<b>$mot</b> ";
                $estMajuscule = true;
            }
        }
        if (!$estMajuscule) {
            $str .= $mot . " ";
        }
    }
    return $str;
}


function cesar($str, $decalage)
{
    $i = 0;
    while (isset($str[$i])) {
        if ($str[$i] >= "a" && $str[$i] <= "z") {
            $position_init = ord($str[$i]) - ord("a");
            $str[$i] = chr(($decalage + $position_init) % 26 + ord("a"));
            $i++;
        } elseif ($str[$i] >= "A" && $str[$i] <= "Z") {
            $position_init = ord($str[$i]) - ord("A");
            $str[$i] = chr(($decalage + $position_init) % 26 + ord("A"));
            $i++;
        } else {
            $i++;
        }
    }
    return $str;
}

function plateforme($str)
{
    $mots = split_mots($str);
    $str = "";
    foreach ($mots as $mot) {
        if ($mot[-1] == "e" && $mot[-2] == "m") {
            $str .= $mot . "_" . " ";
        } else {
            $str .= $mot . " ";
        }
    }
    return $str;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="min-h-screen bg-gray-100 flex items-center justify-center p-6"></body>
<div class="w-full max-w-3xl bg-white rounded-lg shadow-md p-6 space-y-6">
    <h1 class="text-2xl font-semibold text-gray-800">Transformateur de texte</h1>

    <form action="" method="POST" class="space-y-4">
        <div class="flex flex-col md:flex-row md:items-center gap-4">
            <input type="text" name="str" placeholder="Entrez votre texte"
                class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400"
                required>

            <input type="number" name="decalage" placeholder="pour César"
                class="w-32 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400">

            <select name="fonction"
                class="w-44 px-4 py-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-indigo-400">
                <option value="gras">Gras</option>
                <option value="cesar">César</option>
                <option value="plateforme">Plateforme</option>
            </select>
        </div>

        <div>
            <button type="submit"
                class="inline-block px-6 py-2 bg-indigo-600 text-white font-medium rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                Envoyer
            </button>
        </div>
    </form>

    <div class="bg-gray-50 border border-gray-200 rounded-md p-4">
        <h3 class="text-lg font-medium text-gray-700 mb-2">Résultat :</h3>
        <p class="text-gray-800">
            <?= post() ?>
        </p>
    </div>
</div>
</body>

</html>