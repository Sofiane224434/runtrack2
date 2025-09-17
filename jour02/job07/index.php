<?php
$hauteur = 5;
$espace_d = $hauteur;
$espace_e = 0;
for ($i = 0; $i < $hauteur; $i++) {
    for ($j = 0; $j < $espace_d; $j++) {
        echo "&nbsp;";
    }
    $espace_d--;
    echo "/";
    for ($k = 0; $k < $espace_e; $k++) {
        echo "&nbsp" . "&nbsp";
    }
    $espace_e++;
    echo "\\<br>";
}
echo "/";
for ($l = 0; $l < $hauteur; $l++) {
    echo "_";
}
echo "\\<br>";
