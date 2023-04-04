<?php
if (isset($_GET['categories'])) {
        // Sélectionner en BDD uniquement les films de la catégorie qui a comme ID $_GET['categories']
        // Requête SQL pour sélectionner les informations sur tous les films 
        $sql = "SELECT films.id_films, films.titre, films.synopsis, films.image
                        FROM films INNER JOIN film_categorie ON films.id_films = film_categorie.id_categories 
                        WHERE films.id_films = ?";
        $stmt = $pdo->prepare($sql);
        // Préparer la requête SQL
        //var_dump($_GET);
        // Exécuter la requête
        $stmt->execute([$_GET['categories']]);
} else {
        // Requête SQL pour sélectionner les informations sur tous les films
        $sql = "SELECT films.id_films, films.titre, films.synopsis, films.image
                        FROM films";
        $stmt = $pdo->prepare($sql);
        // Préparer la requête SQL

        // Exécuter la requête
        $stmt->execute();
}


// Récupérer les données
$films = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($films);
