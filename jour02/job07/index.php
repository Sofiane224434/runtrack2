<?php
$hauteur = 20;
$espace_d = $hauteur - 1;
$espace_e = 0;
for ($i = 0; $i < $hauteur - 1; $i++) {
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
for ($l = 0; $l < $hauteur - 1; $l++) {
    echo "_";
}
echo "\\<br>";
