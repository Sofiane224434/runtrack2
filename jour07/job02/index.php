<?php
function bonjour($jour)
{
    if ($jour == true) {
        echo "<p>Bonjour</p>";
    } else {
        echo "<p>Bonsoir</p>";
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
    <?php bonjour(true); ?>
    <?php bonjour(false); ?>
</body>

</html>