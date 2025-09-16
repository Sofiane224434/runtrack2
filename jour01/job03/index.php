<?php
$var1 = true;
$var2 = "String";
$var3 = 9;
$var4 = 3.14;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>

<body>
    <header></header>
    <main>
        <table>
            <thead>
                <td>Type</td>
                <td>Nom</td>
                <td>Valeur</td>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo gettype($var1); ?></td>
                    <td>var1</td>
                    <td><?php echo $var1; ?></td>
                </tr>
                <tr>
                    <td><?php echo gettype($var2); ?></td>
                    <td>var2</td>
                    <td><?php echo $var2; ?></td>
                </tr>
                <tr>
                    <td><?php echo gettype($var3); ?></td>
                    <td>var3</td>
                    <td><?php echo $var3; ?></td>
                </tr>
                <tr>
                    <td><?php echo gettype($var4); ?></td>
                    <td>var4</td>
                    <td><?php echo $var4; ?></td>
                </tr>
            </tbody>
        </table>
    </main>
    <footer></footer>
</body>

</html>