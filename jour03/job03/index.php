<?php

$voyelle = ["A", "E", "I", "O", "U", "Y", "a", "e", "i", "o", "u", "y"];
$str = "I'm sorry Dave I'm afraid I can't do that";
$i = 0;
while (isset($str[$i])) {
    foreach ($voyelle as $v) {
        if ($str[$i] == $v) {
            echo $str[$i];
        }
    }
    $i++;
}