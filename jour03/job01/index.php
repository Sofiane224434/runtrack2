<?php

$table = [200, 204, 173, 98, 171, 404, 459];
foreach ($table as $row) {
    if ($row % 2 == 0) {
        echo "<p>$row est paire<br></p>";
    } else {
        echo "<p>$row est impaire<br></p>";
    }
}