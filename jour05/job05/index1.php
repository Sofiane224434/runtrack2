<?php
$stylesel = "";
$styleopt = "";
$stylebtn = "";
$styleform = "";
if (isset($_GET["options"]) && $_GET["options"] === "style2") {
    $styleform = "bg-red-100 border-red-300";
    $stylesel = "border-2 border-red-300 roundedfont-[monospace] px-4 py-2";
    $styleopt = "bg-red-500 text-white font-[monospace]";
    $stylebtn = "bg-red-500 text-white px-4 py-2 rounded";
} elseif (isset($_GET["options"]) && $_GET["options"] === "style3") {
    $styleform = "bg-green-100 border-green-300";
    $stylesel = "border-3 border-green-300 rounded font-[cursive] px-4 py-2";
    $styleopt = "bg-green-500 text-white font-[cursive]";
    $stylebtn = "bg-green-500 text-white px-4 py-2 rounded";
} else {
    $styleform = "bg-blue-100 border-blue-300";
    $stylesel = "border-4 border-blue-300 rounded font-[sans-serif] px-4 py-2";
    $styleopt = "bg-blue-500 text-white font-[sans-serif]";
    $stylebtn = "bg-blue-500 text-white px-4 py-2 rounded";
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

<body>
    <form action="" method="get" class="flex flex-col items-center gap-4 mt-10 <?= $styleform ?>">
        <select name="options" class="<?= $stylesel ?>">
            <option value="style1" class="<?= $styleopt ?>">Style 1</option>
            <option value="style2" class="<?= $styleopt ?>">Style 2</option>
            <option value="style3" class="<?= $styleopt ?>">Style 3</option>
        </select>
        <button type="submit" class="<?= $stylebtn ?>">Envoyer</button>
    </form>
</body>

</html>