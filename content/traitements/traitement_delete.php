<?php

//function delete () {

    require_once('access.php');

    $id = $_GET['id_films'];
    //var_dump($id);
    //$titre = $_POST['titre'];
    //$trailer = $_POST['trailer'];
    //$synopsis = $_POST['synopsis'];
    //$annee = $_POST['annee'];
    //$image = $_POST['image'];

    $sql = $pdo->prepare("DELETE FROM films WHERE id_films = ?");
    $sql->execute([$id]);
    //var_dump($id);

    header("Location: ../pages/admin.php");
//}

?>