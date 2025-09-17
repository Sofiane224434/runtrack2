<?php

for ($i = 1; $i < 101; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "<p>FizzBuzz</p><br>";
    } elseif ($i % 3 == 0) {
        echo "<p>Fizz</p><br>";
    } elseif ($i % 5 == 0) {
        echo "<p>Buzz</p><br>";
    } else {
        echo "<p>$i</p><br>";
    }
}