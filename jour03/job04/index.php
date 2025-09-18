<?php

$str = "Dans l'espace, personne ne vous entend crier.";
$i = 0;
$compteur = 0;
while (isset($str[$i])) {
    $i++;
    $compteur++;
}

echo "La phrase \"$str\" contient $compteur caractères.<br/>";
