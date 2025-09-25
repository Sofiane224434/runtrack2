<?php
//Tic Tac Toe
session_start();

if (!isset($_SESSION['plateau'])) {
    $_SESSION['plateau'] = [
        'button1' => " ",
        'button2' => " ",
        'button3' => " ",
        'button4' => " ",
        'button5' => " ",
        'button6' => " ",
        'button7' => " ",
        'button8' => " ",
        'button9' => " "
    ];
    $_SESSION['joueur_actuel'] = "X";
    $_SESSION['nb_coups'] = 0;
}
function ticTacToe()
{
    for ($i = 1; $i <= 9; $i++) {
        if (isset($_POST["button$i"]) && !verifierVictoire()) {
            if ($_SESSION['plateau']["button$i"] == " ") {
                $_SESSION['plateau']["button$i"] = $_SESSION['joueur_actuel'];
                $_SESSION['joueur_actuel'] = ($_SESSION['joueur_actuel'] == "X") ? "O" : "X";
                $_SESSION['nb_coups']++;
            }
            verifierVictoire();
            break;
        }
    }
    if ($_SESSION['nb_coups'] === 9 && !verifierVictoire()) {
        echo '<div class="fixed top-6 left-1/2 transform -translate-x-1/2 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 px-4 py-2 rounded shadow z-50">
            <span class="font-semibold">Match nul :</span> Il y a match nul !
        </div>';
    }
}
function verifierVictoire()
{
    $gagnantOuNul = false;
    $p = $_SESSION['plateau'];

    $lines = [
        ['button1', 'button2', 'button3'],
        ['button4', 'button5', 'button6'],
        ['button7', 'button8', 'button9'],
        ['button1', 'button4', 'button7'],
        ['button2', 'button5', 'button8'],
        ['button3', 'button6', 'button9'],
        ['button1', 'button5', 'button9'],
        ['button3', 'button5', 'button7'],
    ];

    foreach ($lines as $line) {
        if ($p[$line[0]] === $p[$line[1]] && $p[$line[1]] === $p[$line[2]] && trim($p[$line[0]]) !== '') {
            echo '<div class="fixed top-6 left-1/2 transform -translate-x-1/2 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 px-4 py-2 rounded shadow z-50">
            <span class="font-semibold">Victoire :</span> ' . htmlspecialchars($p[$line[0]]) . ' a gagné !
        </div>';
            $gagnantOuNul = true;
            return $gagnantOuNul;
        }
    }
}
// Bouton reset
if (isset($_POST['reset'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

ticTacToe();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <?php $p = $_SESSION['plateau']; ?>
    <form action="" method="post" class="min-h-screen flex items-center justify-center bg-gray-100 p-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="text-lg font-semibold text-gray-700">
                    Joueur actuel : <span
                        class="ml-2 text-2xl font-bold"><?= htmlspecialchars($_SESSION['joueur_actuel']) ?></span>
                </div>
                <button type="submit" name="reset"
                    class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring">
                    Reset
                </button>
            </div>

            <div class="grid grid-cols-3 gap-3">
                <button type="submit" name="button1" <?= trim($p['button1']) !== '' ? 'disabled' : '' ?>
                    class="w-24 h-24 flex items-center justify-center text-3xl font-bold rounded bg-blue-500 hover:bg-blue-600 text-white disabled:bg-gray-300 disabled:text-gray-700 disabled:cursor-not-allowed">
                    <?= trim($p['button1']) !== '' ? htmlspecialchars($p['button1']) : '&nbsp;' ?>
                </button>
                <button type="submit" name="button2" <?= trim($p['button2']) !== '' ? 'disabled' : '' ?>
                    class="w-24 h-24 flex items-center justify-center text-3xl font-bold rounded bg-blue-500 hover:bg-blue-600 text-white disabled:bg-gray-300 disabled:text-gray-700 disabled:cursor-not-allowed">
                    <?= trim($p['button2']) !== '' ? htmlspecialchars($p['button2']) : '&nbsp;' ?>
                </button>
                <button type="submit" name="button3" <?= trim($p['button3']) !== '' ? 'disabled' : '' ?>
                    class="w-24 h-24 flex items-center justify-center text-3xl font-bold rounded bg-blue-500 hover:bg-blue-600 text-white disabled:bg-gray-300 disabled:text-gray-700 disabled:cursor-not-allowed">
                    <?= trim($p['button3']) !== '' ? htmlspecialchars($p['button3']) : '&nbsp;' ?>
                </button>

                <button type="submit" name="button4" <?= trim($p['button4']) !== '' ? 'disabled' : '' ?>
                    class="w-24 h-24 flex items-center justify-center text-3xl font-bold rounded bg-blue-500 hover:bg-blue-600 text-white disabled:bg-gray-300 disabled:text-gray-700 disabled:cursor-not-allowed">
                    <?= trim($p['button4']) !== '' ? htmlspecialchars($p['button4']) : '&nbsp;' ?>
                </button>
                <button type="submit" name="button5" <?= trim($p['button5']) !== '' ? 'disabled' : '' ?>
                    class="w-24 h-24 flex items-center justify-center text-3xl font-bold rounded bg-blue-500 hover:bg-blue-600 text-white disabled:bg-gray-300 disabled:text-gray-700 disabled:cursor-not-allowed">
                    <?= trim($p['button5']) !== '' ? htmlspecialchars($p['button5']) : '&nbsp;' ?>
                </button>
                <button type="submit" name="button6" <?= trim($p['button6']) !== '' ? 'disabled' : '' ?>
                    class="w-24 h-24 flex items-center justify-center text-3xl font-bold rounded bg-blue-500 hover:bg-blue-600 text-white disabled:bg-gray-300 disabled:text-gray-700 disabled:cursor-not-allowed">
                    <?= trim($p['button6']) !== '' ? htmlspecialchars($p['button6']) : '&nbsp;' ?>
                </button>

                <button type="submit" name="button7" <?= trim($p['button7']) !== '' ? 'disabled' : '' ?>
                    class="w-24 h-24 flex items-center justify-center text-3xl font-bold rounded bg-blue-500 hover:bg-blue-600 text-white disabled:bg-gray-300 disabled:text-gray-700 disabled:cursor-not-allowed">
                    <?= trim($p['button7']) !== '' ? htmlspecialchars($p['button7']) : '&nbsp;' ?>
                </button>
                <button type="submit" name="button8" <?= trim($p['button8']) !== '' ? 'disabled' : '' ?>
                    class="w-24 h-24 flex items-center justify-center text-3xl font-bold rounded bg-blue-500 hover:bg-blue-600 text-white disabled:bg-gray-300 disabled:text-gray-700 disabled:cursor-not-allowed">
                    <?= trim($p['button8']) !== '' ? htmlspecialchars($p['button8']) : '&nbsp;' ?>
                </button>
                <button type="submit" name="button9" <?= trim($p['button9']) !== '' ? 'disabled' : '' ?>
                    class="w-24 h-24 flex items-center justify-center text-3xl font-bold rounded bg-blue-500 hover:bg-blue-600 text-white disabled:bg-gray-300 disabled:text-gray-700 disabled:cursor-not-allowed">
                    <?= trim($p['button9']) !== '' ? htmlspecialchars($p['button9']) : '&nbsp;' ?>
                </button>
            </div>
        </div>
    </form>
</body>

</html>