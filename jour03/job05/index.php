<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>

    <?php

    $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
    $V = ["A", "E", "I", "O", "U", "Y", "a", "e", "i", "o", "u", "y"];
    $C = ["B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z", "b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z"];
    $dic = [
        "consonnes" => 0,
        "voyelles" => 0
    ];
    $i = 0;
    while (isset($str[$i])) {
        foreach ($V as $v) {
            if ($str[$i] == $v) {
                $dic["voyelles"] += 1;
            }
        }
        foreach ($C as $c) {
            if ($str[$i] == $c) {
                $dic["consonnes"] += 1;
            }
        }
        $i++;
    }
    ?>

    <main>
        <table class="table-auto border-4 border-black border-double">
            <thead class="border-4 border-black border-double">
                <tr>
                    <th class="border-4 border-black border-double">Voyelles</th>
                    <th>Consonnes</th>
                </tr>
            </thead>
            <tbody class="border-4 border-black border-double">
                <tr>
                    <td class="border-4 border-black border-double"><?php echo $dic["voyelles"]; ?></td>
                    <td class="border-4 border-black border-double"><?php echo $dic["consonnes"]; ?></td>
                </tr>
            </tbody>
        </table>
    </main>