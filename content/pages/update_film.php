<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mettre à jour</title>
</head>

<body class="bg-[#BBBBBB] bg-fixed bg-[url('../../asset/img/bg.png')] bg-cover bg-no-repeat">
    <?php

    require_once('../../content/traitements/access.php');
    //recupere l'id dans l'url ($GET) et la fout ds $id
    $id = $_GET['id_films'];
    //prepare tous (*) les champs de la table film la ou id_films est egal à $id qui est la variable qui recupere l'id ds l'url
    $sql = $pdo->prepare("SELECT * FROM films WHERE id_films=?");
    //execute la req a partir de l'id ds l'url
    $sql->execute([$id]);
    //va chercher les data du film et les fout ds $data fetchAll prends ttes les entrées et tous les champs
    $data = $sql->fetch();
    // var_dump($data);
    //$titre = $data['titre'];
    //$trailer = $data['trailer'];
    //$synopsis = $data['titre'];
    //$annee = $data['annee'];
    //$image = $data['image'];

    ?>
    <h1 class="text-white m-6 text-center text-xl">Modifier</h1>

    <div class="bg-black/70 p-12 mx-80 rounded flex justify-center">

        <form action="../traitements/traitement_update.php?id_films=<?php echo $data['id_films'] ?>" method="POST" enctype="multipart/form-data" class="grid p-8 pt-0">
            <label class="text-white my-2 mx-[400px]" for="titre">Titre</label>
            <input class="mx-[400px] p-1 " type="text" name="titre" value="<?php echo $data['titre']; ?>">
            <label class="text-white my-2  mx-[400px]" for="trailer">Trailer</label>
            <input class="mx-[400px] p-1" type="text" name="trailer" value="<?php echo $data['trailer']; ?>">
            <label class="text-white my-2 mx-[400px]" for="synopsis">Synopsis</label>
            <textarea class="p-1 mx-[400px]" type="text" name="synopsis"><?php echo $data['synopsis']; ?></textarea>
            <label class="mx-[400px] text-white my-2 " for="annee">Année</label>
            <input class="mx-[400px] p-1 " type="text" name="annee" value="<?php echo $data['annee']; ?>">
            <label class="text-white my-2  mx-[400px]" for="image" name="image">Image</label>
            <input class="mx-[400px] text-white" type="file" name="image" value="<?php echo $data['image']; ?>">
            <label class="text-white  my-2 mx-[400px]" for="submit" name="submit"></label>
            <button class="bg-[#FDD835]/90 rounded p-2 mx-[400px] mt-3 hover:bg-black hover:text-white" type="submit">Ajouter</button>
        </form>

    </div>

</body>

</html>