<?php

session_start();

?>

<?php

require_once('content/traitements/access.php');
require('content/traitements/traitement_accueil.php');
// require('content/traitements/traitement_film.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/output.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>Accueil</title>
</head>

<body class="bg-[#BBBBBB] mt-0 bg-fixed bg-[url('/trailery/asset/img/bg.png')] bg-cover bg-no-repeat">

  <?php

  include 'header.php';

  ?>

  <div class="bg-[#FDD835]/70 p-4">

    <?php if (isset($_SESSION['pseudo'])) { ?>

      <span class="flex text-white justify-center font-extralight mt-2"><?php echo $_SESSION['pseudo'] . ' ' . 'Vous étes connecté' ?></span>

    <?php
    }
    ?>

    <h2 class="text-white text-center text-xl p-4 md:text-xl lg:text-xl xl:text-2xl animate-pulse">"Plongez dans l'univers du cinéma<br>en un clic !"</h2>

  </div>

  <div id="carouselExampleControls" class="relative" data-te-carousel-init data-te-carousel-slide>
    <div class="relative w-full xl:h[300px] overflow-hidden after:clear-both after:block after:content-['']">
      <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item data-te-carousel-active>
        <img src="asset/img/la-cite-des-enfants-perdus-infos.jpeg" class="block w-full h-[300px] lg:h-[400px] xl:h-[500px]" alt="Wild Landscape" />
      </div>
      <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
        <img src="asset/img/image.jpg" class="block w-full h-[300px] lg:h-[400px] xl:h-[530px]" alt="Camera" />
      </div>
      <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
        <img src="asset/img/uma.jpg" class="block w-full h-[300px] lg:h-[400px] xl:h-[530px]" alt="Exotic Fruits" />
      </div>

      <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
        <img src="asset/img/delicat.jpg" class="block w-full h-[300px] lg:h-[400px] xl:h-[530px]" alt="Exotic Fruits" />
      </div>

    </div>
    <button class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleControls" data-te-slide="prev">
      <span class="inline-block h-8 w-8">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
      </span>
      <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
    </button>
    <button class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleControls" data-te-slide="next">
      <span class="inline-block h-8 w-8">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
      </span>
      <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
    </button>
  </div>

  <div class="flex m-8 justify-center lg:justify-start mp-32 xl:mp-52">
    <input class=" pl-2 rounded lg:pr-12 lg:ml-12 xl:pl-7 xl:p-7'" type="search" name="recherche" placeholder="Cherchez un trailer" </input>
    <input class="ml-1.5 rounded bg-[#FDD835]/90 p-2" type="submit" name="boutonr" value="Chercher" </input>
  </div>

  <h2 class="flex justify-center text-white text-xl mb-12 md:text-xl lg:text-2xl mt-12 xl:text-3xl"> Derniers ajouts </h2>

  <div class="md:grid md:grid-cols-3 md:grid-rows-2 md:m-16 gap-4">

    <?php foreach ($films as $film) {
      $image = $film['image'];
    ?>
      <?php $film['image'] = '\asset\upload\6426cc827ef8e.png'; ?>
      <div class="bg-white/75 p-8 m-12 pt-2 rounded md:m-2 md: lg:m-4 xl:">

        <h3 class="text-center mb-4 text-xl md:text-base md:mb-6 lg:text-xl xl:mt-2"><?php echo ($film['titre']); ?></h3>
        <div class="flex justify-center h-[240px] md:h-[160px] lg:justify-center lg:mb-4">
          <img class="object-contain md:px-2 lg:px-4 xl:pt-0 " src="asset/upload/<?php echo $image ?>" </img>
        </div>
        <p class="mt-4 mb-2 md:text-sm line-clamp-6 xl:p-0"><?php echo ($film['synopsis']); ?></p>

        <a class="flex text-white bg-[#FDD835]/90 justify-center mx-2 py-1 rounded-full hover:bg-black md:mx-0 md:text-xs md:py-2 lg:mx-4 lg:bottom-0 lg:py-4 xl:mx-20" href="/trailery/content/pages/film?id_films=<?php echo $film['id_films'] ?>">Regarder&nbsp;le&nbsp;Trailer</a>

      </div>

    <?php
    }
    ?>

  </div>

  <button id="back-to-top" class="hidden fixed bottom-20 right-10 bg-[#FDD835]/90 text-white py-2 px-4 rounded-full transition-opacity duration-300">
    <i class="bi bi-arrow-up-circle-fill text-black"></i>
  </button>

  <footer class="flex bg-black p-4 items-center place-content-around">

    <img class="w-16 py-4 object-contain" src="asset/img/logosantitre.png" </img>

    <div class="flex flex-col">
      <span class="text-white text-xs">Politique de confidentialité</span>
      <span class="text-white text-xs self-center">Réglementation RGPD</span>
    </div>

    <div>
      <i class="bi bi-facebook text-white p-1 text-2xl"></i>
      <i class="bi bi-telegram text-white p-1 text-2xl"></i>
    </div>

  </footer>


  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <script src="asset/js/script1.js"></script>
  <script src="asset/js/script2.js"></script>

</body>

</html>