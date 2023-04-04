<?php
session_start();
require_once('access.php');

if (isset($_POST['submit'])) {
    $id = ($_SESSION['Id_user']);
    $nom = htmlspecialchars($_POST['nom']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $repeat_password = htmlspecialchars($_POST['repeat_password']);

    // Vérifier si tous les champs sont set et remplis
    if (
        !isset($_POST['nom']) || empty($_POST['nom'])
        || 
        !isset($_POST['pseudo']) || empty($_POST['pseudo'])
        || 
        !isset($_POST['email']) || empty($_POST['email']) 
        || 
        !isset($_POST['password']) || empty($_POST['password'])
        || 
        !isset($_POST['repeat_password']) || empty($_POST['repeat_password'])      
    )
    {
    // Si les champs ne sont pas set ou vides
    // tu die avec message d'erreur et tu exit sinon tu continue le script
    die("Un ou plusieurs champs est inexistant ou vide");
    // header("Location: inscription.php?error=emptyfields");
    exit();
    }

    // Vérifier si l'email est valide !filtervar = verifie si le mail existe.
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    // header("Location: inscription.php?error=invalidemail");
    exit();
    }

    // Vérifier si les mots de passe correspondent
    if ($password !== $repeat_password) {
    // header("Location: inscription.php?error=passwordcheck");
    exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = $pdo->prepare("UPDATE utilisateur SET nom = :nom, mail = :mail, pseudo = :pseudo, mdp = :robert WHERE Id_user=:id_user");//$id

    $sql->execute([
        ':nom' => $nom, 
        ':mail' => $mail, 
        ':pseudo' => $pseudo, 
        ':robert' => $hashed_password, 
        'id_user' => $id
    ]);
    //die();

    header("Location: ../../index.php");

}

?>

//