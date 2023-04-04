<?php
require_once('access.php');
var_dump($_POST);

$titre = $_POST['titre'];
$trailer = $_POST['trailer'];
$synopsis = $_POST['synopsis'];
$annee = $_POST['annee'];
$image = $_POST['image'];

if ( 
    !isset($_POST['titre']) || empty($_POST['titre'])
    ||
    !isset($_POST['trailer']) || empty($_POST['trailer'])
    ||
    !isset($_POST['synopsis']) || empty($_POST['synopsis'])
    ||
    !isset($_POST['annee']) || empty($_POST['annee'])
    ||
    !isset($_POST['image']) || empty($_POST['image'])
)

{   
    
    die("Un ou plusieurs champs est inexistant ou vide");
    // header("Location: inscription.php?error=emptyfields");
    exit();  

}
//va chercher  titre et trailer si il existe deja il die 
$stmt = $pdo->prepare("SELECT * FROM films WHERE titre=?");
$stmt->execute([$titre]);
$film = $stmt->fetch();
if ($film) {
   die("Film existant");
}

//$sql = "INSERT INTO films (titre, trailer, synopsis, annee, image) VALUE (:titre, :trailer, :synopsis, :annee, :image)";
$sql = "INSERT INTO films SET titre= ?, trailer= ?, synopsis= ?, annee= ?, image= ?";

// Préparer la requête SQL
$stmt = $pdo->prepare($sql);

// Exécuter la requête
$stmt->execute([$titre, $trailer, $synopsis, $annee, $image]);

header("Location: ../pages/admin.php");
