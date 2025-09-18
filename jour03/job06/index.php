<?php

$str = "Les choses que l'on possède finissent par nous posséder.";
$i = -1;
while (isset($str[$i]) && $i !== 0) {
    if ($str[$i] . $str[$i + 1] == "è") {
        echo $str[$i] . $str[$i + 1];
    } elseif ($str[$i] . $str[$i + 1] == "é") {
        echo $str[$i] . $str[$i + 1];
    } else {
        echo $str[$i];
    }
    $i--;
}