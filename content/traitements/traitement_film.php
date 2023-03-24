<?php

//Récuperer l'id 
$id = $_GET['id'];

//recuperer les id des films
// Requête SQL pour sélectionner les informations sur le film
$sql = "SELECT  *
        FROM films WHERE id = ? ";

// Préparer la requête SQL
$stmt = $pdo->prepare($sql);

// Exécuter la requête
$stmt->execute([$id]);

// Récupérer les données
$films = $stmt->fetch(PDO::FETCH_ASSOC);

?>
