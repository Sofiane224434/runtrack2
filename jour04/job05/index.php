<?php

if (isset($_POST)) {
    if ($_POST["username"] == "John" && $_POST["password"] == "Rambo") {
        echo "<br><p>C'est pas ma guerre</p>";
    } else {
        echo "<br><p>Votre pire cauchemar</p>";
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
    <form method="post" action="">
        <input type="text" name="username" placeholder="Nom d'utilisateur">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>