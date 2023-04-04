<?php

session_start();
require_once('access.php'); // inclure le fichier d'accès à la base de données

if (isset($_POST['submit'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    if (empty($email) || empty($password)) {
        // si l'un des champs est vide, rediriger vers la page de connexion avec un message d'erreur
        header("Location: /trailery/content/form/connection.php?error=emptyfields");
        exit();
    } else {
        // récupérer l'utilisateur correspondant à l'adresse e-mail fournie
        $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE mail=?"); //stmt va chercher les données de ma table
        $stmt->execute([$email]); //execute va comparer mon input a ma table pour voir si il existe
        $user = $stmt->fetch(); //ce que fetch va chercher ds statement (fait la requete entre la table et l'input) et attribue à $user
        if ($user) { // si l'utilisateur existe
            //$hash = password_hash($password, PASSWORD_DEFAULT);//haché le mot de passe
            if (password_verify($password, $user['mdp'])) { // vérifier si le mot de passe correspond

            var_dump($user);

            $req2 = $pdo->prepare("SELECT * FROM role_utilisateur WHERE Id_user = ?" );
            $req2->execute([$user['Id_user']]);
            $role = $req2->fetch();    
            var_dump($role);
            // die;

                $_SESSION['Id_user'] = $user['Id_user'];
                $_SESSION['email'] = $user['mail'];
                $_SESSION['pseudo'] = $user['pseudo'];
                var_dump($_SESSION);
                $_SESSION['Id_role'] = $role['Id_role'];
                if ($_SESSION['Id_role'] == 1) {
                    header("Location: ../pages/admin.php");
                    exit();
                } elseif ($_SESSION['Id_role'] == 2) { 
                    
                    header("Location: ../../index.php");
                    exit();
                }
                
            } else {
                header("Location: /trailery/content/form/connection.php");
                exit();
            }
        }
    }
}
