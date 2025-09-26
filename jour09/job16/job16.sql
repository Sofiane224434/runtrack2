USE jour09;
SELECT etage.nom, salles.nom AS "Biggest Room", salles.capacite 
FROM salles
JOIN etage ON salles.id_etage = etage.id
WHERE salles.capacite = (SELECT MAX(capacite) FROM salles);