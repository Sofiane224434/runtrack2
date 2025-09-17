<?php

for ($i = 0; $i < 101; $i++) {
    if ($i > 0 && $i < 20) {
        echo "<p><i>$i</i></p><br>";
    } elseif ($i == 42) {
        echo "<p>La Plateforme_</p><br>";
    } elseif ($i > 25 && $i < 50) {
        echo "<p style=\"text-decoration: underline;\">$i</p><br>";
    } else {
        echo "<p>$i</p><br>";
    }
}