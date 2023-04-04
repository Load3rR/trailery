<?php
//recuperer les id des films
// Requête SQL pour sélectionner toutes les infos sur le film
// $sql = "SELECT  *
//         FROM films ";

// // Préparer la requête SQL
// $stmt = $pdo->prepare($sql);

// // Exécuter la requête
// $stmt->execute([]);

// // Récupérer toutes les données et les foutre dans $films
// $films = $stmt->fetchAll(PDO::FETCH_ASSOC);

//si la variable $GET est vide donne une id vide 
if(empty($_GET)){
        $_GET['id_films']="";
}

//RECUPERE l'id ds l'url (get) et ds la variable $id
$id = $_GET['id_films'];

//recuperer les id des films
// Requête SQL pour sélectionner les informations sur le film
$sql2 = "SELECT  *
        FROM films WHERE id_films = ?";

// Préparer la requête SQL
$stmt2 = $pdo->prepare($sql2);

// Exécuter la requête
$stmt2->execute([$id]);

// Récupérer les données
$infoFilm = $stmt2->fetch(PDO::FETCH_ASSOC);

?>
