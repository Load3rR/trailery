<?php
$host = "localhost"; // l'hôte de la base de données
$db_name = "trailery"; // le nom de la base de données
$username = "root"; // le nom d'utilisateur de la base de données
$password = ""; // le mot de passe de la base de données
//$charset = 'utf8mb4'; //decoder le caracteres spéciaux (?)


try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password, array(PDO::ATTR_EMULATE_PREPARES => false, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    // configurer le mode d'erreur PDO pour afficher les erreurs de requête SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connecté avec succès à la base de données.";
} catch (PDOException $e) {
    echo "La connexion à la base de données a échoué: " . $e->getMessage();
}
