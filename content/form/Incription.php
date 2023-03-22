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
    
<h1 class="text-white text-center text-2xl m-4 md:m-6">Inscription</h1>

<div class="bg-white/80 mx-6 mb-6 rounded md:mx-32 lg:mx-48 xl:mx-96">
    <form class="grid mx-28 py-px  justify-center" action="../traitements/traitement_inscription.php" method="POST">
		
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
</body>
</html>