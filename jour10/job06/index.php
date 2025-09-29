<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT COUNT(*) 
            AS nb_etudiants
            FROM etudiants;
            ";
    $stmt = $pdo->query($sql);

    echo "<table border='1'>";
    echo "<tr><th>Nombre d'étudiants</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['nb_etudiants'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} catch (PDOException $e) {
    echo "Erreur de connexion ! ";
}