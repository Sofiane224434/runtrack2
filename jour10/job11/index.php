<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT AVG(capacite) 
            AS moyenne_capacite
            FROM salles;
            ";
    $stmt = $pdo->query($sql);

    echo "<table border='1'>";
    echo "<tr><th>Capacite Moyenne</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['moyenne_capacite'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} catch (PDOException $e) {
    echo "Erreur de connexion ! ";
}