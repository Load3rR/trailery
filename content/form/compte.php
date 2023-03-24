<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Mon compte</title>
</head>
<body class="bg-[#BBBBBB] bg-fixed bg-[url('../../asset/img/bg.png')] bg-cover bg-no-repeat">

<?php

    include '../../header.php';

?>

<h1 class="text-center text-white p-4 md:text-xl xl:text-3xl">Mon compte</h1>

<div class="bg-white/80 mx-6 mb-6 rounded md:m-20 md:mt-2 md:mb-2 lg:mx-32 xl:mx-80">
    <form class="grid mx-28 py-px  justify-center" action="" method="POST">
		
        <label class="label1 my-2" for="nom">Nom :</label>
		<input class="py-px mb-2" type="text" name="nom" id="nom">
    
        <label class="label1 my-2" for="email">Email :</label>
		<input class="py-px mb-2" type="email" name="email" id="email">

        <label class="label1 my-2" for="pseudo">Pseudo :</label>
		<input class="py-px mb-2" type="text" name="pseudo" id="pseudo">

		<label class="label1 my-2" for="password">Mot de passe :</label>
		<input class="py-px mb-2" type="password" name="password" id="password">

		<label class="label1 my-2" for="repeat_password">Répéter le mot de passe :</label>
		<input class="py-px mb-2" type="password" name="repeat_password" id="repeat_password">

		<input class="bg-black/90 mx-6 my-6 rounded py-2 text-white" type="submit" name="submit" value="S'inscrire">
	</form>
</div>

<h2 class="text-center text-white p-4 md:text-xl xl:text-3xl">Mes favoris</h2>

<div class="bg-white/75 p-4 m-6 pt-2 rounded md:m-20 md:mt-2 lg:mx-32 lg:mt-2 xl:mx-80 xl:mt-2">

    <h3 class="text-center mb-4 text-xl md:text-2xl mb-6 lg:text-2xl xl:text-3xl mt-4 p-2 mb-5">Titre trailer</h3>
    <img class="md:px-20 lg:px-20  xl:pt-0" src="../../asset/img/affiche.jpg"</img>
    <h3 class="text-center p-4">Synopsis</h3>
    <a class="flex text-white bg-[#FDD835]/90 justify-center mx-4 py-1 rounded-full hover:bg-black md:mx-24 md:py-4 lg:mx-48 lg:py-4" href="/trailery/content/pages/film">Regarder&nbsp;le&nbsp;Trailer</a>
    <a class="flex justify-end text-xl mt-4 drop-shadow-md md:text-2xl xl:text-3xl" href=""><i class="bi bi-plus-circle"></i></a>

</div>

<footer class="flex bg-black p-4 items-center place-content-around">
  
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

<button id="back-to-top" class="hidden fixed bottom-20 right-10 bg-[#FDD835]/90 text-white py-2 px-4 rounded-full transition-opacity duration-300">
  <i class="bi bi-arrow-up-circle-fill text-black"></i>
</button>

</footer>

    <script src="../../asset/js/script1.js"></script>
    <script src="../../asset/js/script2.js"></script>
    
</body>
</html>