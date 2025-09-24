<?php
function calcule($a, $operation, $b)
{
    switch ($operation) {
        case "+":
            return $a + $b;
        case "-":
            return $a - $b;
        case "*":
            return $a * $b;
        case "/":
            return $a / $b;
        case "%":
            return $a % $b;
    }
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
    <p>1 + 2 = <?= calcule(1, "+", 2); ?></p>
    <p>1 - 2 = <?= calcule(1, "-", 2); ?></p>
    <p>1 * 2 = <?= calcule(1, "*", 2); ?></p>
    <p>1 / 2 = <?= calcule(1, "/", 2); ?></p>
    <p>1 % 2 = <?= calcule(1, "%", 2); ?></p>
</body>

</html>