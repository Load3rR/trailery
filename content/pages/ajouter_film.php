<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ajouter un film</title>
</head>

<body class="bg-[#BBBBBB] bg-fixed bg-[url('../../asset/img/bg.png')] bg-cover bg-no-repeat">

    <?php

    require_once('../../content/traitements/access.php');

    ?>

    <h1 class="text-white m-6 text-center text-xl">Ajouter un film</h1>

<div class="bg-black/70 p-12 mx-80 rounded flex justify-center">

    <form action="../traitements/traitement_ajouter_film.php" method="POST" enctype="multipart/form-data" class="grid p-8 pt-0 text-white">
        <label class=" my-2 mx-[420px]" for="titre">Titre :</label>
        <input class="p-2 mx-[420px]" type="text" name="titre">
        <label class=" my-2 mx-[420px]" for="trailer">Trailer :</label>
        <input class="p-1 mx-[420px]" type="text" name="trailer">
        <label class=" my-2 mx-[420px]" for="synopsis">Synopsis :</label>
        <textarea class="p-1 mx-[420px]" type="text" name="synopsis"></textarea>
        <label class=" my-2 mx-[420px]" for="annee">Année :</label>
        <input class="p-1 mx-[420px]" type="text" name="annee">
        <label class=" my-2 mx-[420px]" for="image" name="image">Image :</label>
        <input class="mx-[420px]" type="file" name="image">
        <label class="mx-[420px] my-2" for="submit" name="submit"></label>
        <input class="bg-[#FDD835]/90 rounded p-2 mx-[420px] mt-3 hover:bg-black hover:text-white" type="submit" value="Ajouter">
    </form>

</div>

</body>

</html>