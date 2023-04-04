<?php

session_start();
require_once('access.php');

if (isset($_POST['submit'])) {

$nom = htmlspecialchars($_POST['nom']);
$pseudo = htmlspecialchars($_POST['pseudo']);
$email = htmlspecialchars($_POST['email']);
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
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   // header("Location: inscription.php?error=invalidemail");
   exit();
}

// Vérifier si les mots de passe correspondent
if ($password !== $repeat_password) {
   // header("Location: inscription.php?error=passwordcheck");
   exit();
}

// Vérifier si l'utilisateur n'existe pas déjà dans la base de données
$stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE mail=? OR pseudo=?");
$stmt->execute([$email, $pseudo]);
$user = $stmt->fetch();
if ($user) {
   die("utilisateur existant");
}
       // Hasher le mot de passe
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insérer l'utilisateur dans la base de données
$stmt = $pdo->prepare("INSERT INTO utilisateur (nom, mail, pseudo, mdp) VALUES (?, ?, ?, ?)");
$stmt->execute([$nom, $email, $pseudo, $hashed_password]);
//mettre la derniere id entree en bdd ds la variable $idnew 
$idNew = $pdo->lastInsertId();

$stmt = $pdo->prepare("INSERT INTO role_utilisateur (Id_user, Id_role) VALUES (?, ?)");
$stmt->execute([$idNew, 2]);
// Rediriger l'utilisateur vers la page de connexion
header("Location: ../../index.php?success=inscription");
exit();

}

?>

//                      $sql = "SELECT utillisateur.Id_user
                        FROM utillisateur INNER JOIN role_utilisateur ON utillisateur.Id_user = role_utilisateur.Id_user 
                        WHERE utillisateur.Id_user = ?";