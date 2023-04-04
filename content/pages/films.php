<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>Films</title>
</head>

<body class="bg-[#BBBBBB] bg-fixed bg-[url('../../asset/img/bg.png')] bg-cover bg-no-repeat">

  <?php
  session_start();
  require_once('../../content/traitements/access.php');
  include('../../header.php');
  require('../traitements/traitement_card.php')

  ?>

  <form class="flex justify-center">
    <input class="my-4 p-0.5 rounded" type="search" name="search" placeholder="Chercher un trailer">
    <input class="bg-[#FDD835]/80 p-0.5 rounded my-4 py-2 px-2" type="submit" name="submit" value="Chercher">
  </form>

  <div class="flex justify-center">

    <form class="flex justify-center px-4 mx-4" method="GET" class="flex justify-center">
      <select class="rounded my-4" name="categories" id="categories-select">
        <option>--Selectionnez une categorie--</option>
        <option value="1">Comédie</option>
        <option value="2">Action</option>
        <option value="3">Drame</option>
      </select>
      <input class="bg-[#FDD835]/80 p-0.5 rounded my-4 py-2 px-2" type="submit" name="submit" value="Chercher">
    </form>

  </div>

  <div class="md:grid md:grid-cols-3 md:grid-rows-2 md:m-16 gap-4 lg:grid lg:grid-cols-3 lg:grid-rows-2 xl:grid xl:grid-cols-3 xl:grid-rows-2">

    <?php foreach ($films as $film) {
      $image = $film['image'];
    ?>

      <div class="bg-white/75 flex justify-center flex-col p-8 m-16 pt-2 rounded md:m-4 md:text-sm md:mt-2 lg:mx-4 lg:mt-2 xl:mx-4 xl:mt-2">
        <h3 class="mt-0 mb-2 text-center text-xl md:text-sm md:mb-6 lg:text-xl xl:text-2xl xl:mt-4 xl:p-2 xl:mb-5"><?php echo ($film['titre']); ?></h3>
        <img class=" md:px-4 md:h-[130px] lg:px-1 lg:h-[300px] xl:pt-0 xl:h-[400px]" src="/trailery/asset/upload/<?php echo $image ?>" </img>
        <h3 class="text-center m-4 line-clamp-6"><?php echo ($film['synopsis']); ?></h3>
        <a class="flex text-white bg-[#FDD835]/90 justify-center mx-4 py-1 rounded-full hover:bg-black md:mx-0 md:text-xs md:py-4 lg:mx-4 lg:py-4" href="/trailery/content/pages/film?id_films=<?php echo $film['id_films'] ?>">Regarder&nbsp;le&nbsp;Trailer</a>

        <button class="flex justify-end text-xl mt-4 drop-shadow-md md:text-2xl xl:text-3xl" href=""><i class="bi bi-plus-circle"></i></button>
      </div>

    <?php
    }
    ?>
  </div>

  <button id="back-to-top" class="hidden fixed bottom-20 right-10 bg-[#FDD835]/90 text-white py-2 px-4 rounded-full transition-opacity duration-300">
    <i class="bi bi-arrow-up-circle-fill text-black"></i>
  </button>

  <footer class="flex bg-black p-4 items-center place-content-around">

    <img class="w-16 py-4 object-contain" src="../../asset/img/logosantitre.png" </img>

    <div class="flex flex-col">
      <span class="text-white text-xs">Politique de confidentialité</span>
      <span class="text-white text-xs self-center">Réglementation RGPD</span>
    </div>

    <div>
      <i class="bi bi-facebook text-white p-1 text-2xl"></i>
      <i class="bi bi-telegram text-white p-1 text-2xl"></i>
    </div>


  </footer>

  <script src="../../asset/js/script1.js"></script>
  <script src="../../asset/js/script2.js"></script>

</body>