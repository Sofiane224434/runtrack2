<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$minuscule = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
$majuscule = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
$i = 0;
$i_transform_mM = 0;
$str .= $str[0]; //rajouter la première lettre à la fin
while ($str[-1] !== $majuscule[$i_transform_mM]) { //transformer la dernière en minuscule
    $i_transform_mM++;
}
$str[-1] = $minuscule[$i_transform_mM];
$i_transform_mM = 0;
$len = 0;
while (isset($str[$len - 1])) {
    $len++;
}
while ($i < $len - 2) {
    if ($i == 0) {
        while ($str[$i + 1] != $minuscule[$i_transform_mM]) {
            $i_transform_mM++;
        }
        echo $majuscule[$i_transform_mM];
        $i++;
    } else {
        echo $str[$i + 1];
        $i++;
    }
}