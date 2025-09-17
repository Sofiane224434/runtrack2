<?php

// Je n'y arrivais pas, j'ai regardé la correction :

// tableau des nombres premiers trouvés (on commence par 2)
$j = [2];

// afficher le premier nombre premier
echo "<p>2</p><br>";

// tester chaque entier impair à partir de 3 jusqu'à 999
for ($i = 3; $i < 1000; $i++) {
    $isPrime = true; // on suppose que $i est premier tant qu'on trouve pas de diviseur

    // vérifier les diviseurs parmi les nombres premiers déjà trouvés
    foreach ($j as $k) {
        // optimisation : si k*k > i, plus besoin de tester les plus grands diviseurs
        if ($k * $k > $i) {
            break;
        }
        if ($i % $k == 0) {
            // $i est divisible par $k, donc pas premier
            $isPrime = false;
            break;
        }
    }

    // si aucun diviseur trouvé, $i est premier -> on l'ajoute et on l'affiche
    if ($isPrime) {
        $j[] = $i;
        echo "<p>$i</p><br>";
    }
}