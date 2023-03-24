<?php

// Requête SQL pour sélectionner les informations sur tous les films
$sql = "SELECT films.titre, films.synopsis, films.image
        FROM films";

// Préparer la requête SQL
$stmt = $pdo->prepare($sql);

// Exécuter la requête
$stmt->execute();

// Récupérer les données
$films = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>