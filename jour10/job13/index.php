<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT salles.nom AS salle, etage.nom AS etage
            FROM salles
            JOIN etage 
            ON salles.id_etage = etage.id;
            ";
    $stmt = $pdo->query($sql);

    echo "<table border='1'>";
    echo "<tr><th>Nom de la salle</th><th>Nom de l'étage</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['salle'] . "</td>";
        echo "<td>" . $row['etage'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} catch (PDOException $e) {
    echo "Erreur de connexion ! ";
}