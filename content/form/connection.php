<?php 

session_start();

?>


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

<body class="bg-[#BBBBBB] bg-fixed bg-[url('../../asset/img/bg1.png')]">

<?php

    include '../../header.php';

?>
    
<h1 class="text-white text-center text-2xl m-4">Connectez-vous</h1>

<div class="bg-white/80 mx-6 mb-6 rounded md:mx-32 lg:mx-48 xl:mx-96">
    <form class="grid mx-28 py-px justify-center" action="/trailery/content/traitements/traitement_connex" method="POST">

        <label class="label1 my-2" for="pseudo">Pseudo :</label>
		<input class="py-px mb-2" type="text" name="pseudo" id="pseudo">

		<label class="label1 my-2" for="email">Email :</label>
		<input class="py-px mb-2" type="email" name="email" id="email">

		<label class="label1 my-2" for="password">Mot de passe :</label>
		<input class="py-px mb-2" type="password" name="password">

		<input class="bg-black/90 mx-6 my-6 rounded py-2 text-white" type="submit" name="submit" value="Connection">
	</form>
</div>

<a class="flex text-white justify-center mb-6" href="/trailery/content/form/Incription.php">Ou inscrivez vous</a>

<button id="back-to-top" class="hidden fixed bottom-20 right-10 bg-[#FDD835]/90 text-white py-2 px-4 rounded-full transition-opacity duration-300">
  <i class="bi bi-arrow-up-circle-fill text-black"></i>
</button>

<footer class=" flex bg-black p-4 items-center place-content-around absolute right-0 left-0 bottom-0">
    
    <img class="w-16 py-4 object-contain" src="../../asset/img/logosantitre.png"</img>

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