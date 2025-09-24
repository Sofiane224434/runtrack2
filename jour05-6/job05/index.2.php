<?php
$stylecss = "";
if (isset($_GET["options"]) && $_GET["options"] === "style2") {
    $stylecss = "style2.css";
} elseif (isset($_GET["options"]) && $_GET["options"] === "style3") {
    $stylecss = "style3.css";
} else {
    $stylecss = "style1.css";
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $stylecss ?>">
    <title>Document</title>
</head>

<body>
    <form action="" method="get" class="styleform">
        <select name="options" class="stylesel">
            <option value="style1" class="styleopt">Style 1</option>
            <option value="style2" class="styleopt">Style 2</option>
            <option value="style3" class="styleopt">Style 3</option>
        </select>
        <button type="submit" class="stylebtn">Envoyer</button>
    </form>
</body>

</html>