<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Inscription</title>
</head>
<body class="bg-[#BBBBBB] bg-fixed bg-[url('../../asset/img/bg.png')] bg-cover bg-no-repeat">

<?php

    require_once('../../content/traitements/access.php');
    include '../../header.php';
    require('../traitements/traitement_card.php')

?>

<form class="flex justify-center">
<input class="my-4 p-0.5 rounded" type="search" name="search" placeholder="Chercher un trailer">
<input class="bg-[#FDD835]/80 p-0.5 rounded my-4 py-2 px-2" type="submit" name="submit" value="Chercher">
</form>

<div class="flex justify-center">
    
<select class="rounded mb-4" name="categories" id="categories-select">
    <option>--Selectionnez une categorie--</option>
    <option value="comédie">Comédie</option>
    <option value="action">Action</option>
    <option value="drame">Drame</option>
</select>

</div>

<div>

<?php foreach ($films as $film) {
?>

<div class="bg-white/75 p-8 m-16 pt-2 rounded md:m-20 md:mt-2 lg:mx-32 lg:mt-2 xl:mx-80 xl:mt-2">

<h3 class="text-center mb-4 text-xl md:text-2xl mb-6 lg:text-2xl xl:text-3xl mt-4 p-2 mb-5"><?php echo utf8_encode($film['titre']); ?></h3>
<img class="md:px-20 lg:px-20  xl:pt-0" src="<?php echo $film['image']; ?>"</img>
<h3 class="text-center p-4"><?php echo utf8_encode($film['synopsis']); ?></h3>
<a class="flex text-white bg-[#FDD835]/90 justify-center mx-4 py-1 rounded-full hover:bg-black md:mx-24 md:py-4 lg:mx-48 lg:py-4" href="/trailery/content/pages/film">Regarder&nbsp;le&nbsp;Trailer</a>
<a class="flex justify-end text-xl mt-4 drop-shadow-md md:text-2xl xl:text-3xl" href=""><i class="bi bi-plus-circle"></i></a>

</div>

<?php
} ?>

<footer class=" flex bg-black p-4 items-center place-content-around">
  
  <img class="w-16 py-4 object-contain" src="../../asset/img/logosantitre.png"</img>

  <div class="flex flex-col">
  <span class="text-white text-xs">Politique de confidentialité</span> 
  <span class="text-white text-xs self-center">Réglementation RGPD</span>
  </div>

  <div>
  <i class="bi bi-facebook text-white p-1 text-2xl"></i>
  <i class="bi bi-telegram text-white p-1 text-2xl"></i>
  </div>
</div>

<button id="back-to-top" class="hidden fixed bottom-20 right-10 bg-[#FDD835]/90 text-white py-2 px-4 rounded-full transition-opacity duration-300">
  <i class="bi bi-arrow-up-circle-fill text-black"></i>
</button>

</footer>

    <script src="../../asset/js/script1.js"></script>
    <script src="../../asset/js/script2.js"></script>

</body>