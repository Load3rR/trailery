<header class="flex place-content-around  bg-black justify-center items-center opacity-90 p-2 lg:flex">

  <a href="/trailery/index.php"><img class="align-middle p-1 w-16 object-contain md:py-6 lg:flex justify-start lg:w-20 xl:w-32" src="/trailery/asset/img/logosantitre.png"/img></a>

  <h1 class="align-middle text-white ml-8 mr-8 text-2xl md:text-3xl lg:align-middle lg:p-4 xl:text-5xl xl:p-6">Trailery</h1>


  <!--<i class="bi bi-person-lines-fill text-white text-3xl lg:text-4xl xl:text-5xl"></i>!-->
  
  <div class="menu-icon lg:hidden">

    <i id='burger' class="bi bi-list text-white text-3xl lg:text-4xl xl:text-5xl"></i>
    <i id='croix' class="bi bi-x icon-close text-white text-3xl lg:text-4xl xl:text-6xl hidden"></i>
  </div>
  
</header>

<ul class="hidden lg:flex lg:pb-2 sticky bg-black/90 text-white p-2 justify-center xl:text-xl xl:pb-6">
    <li><a class="px-2" href="/trailery/index.php">Accueil</a></li>
    <li><a class="px-2" href="/trailery/content/pages/films.php">Tous nos films</a></li>
    <li><a class="px-2" href="/trailery/content/form/contact.php">Contactez-nous</a></li>
    <?php
    
   
   if (!isset($_SESSION["pseudo"])) { 
      echo
    '<li><a class="px-2" href="/trailery/content/form/connection.php">Connection/Inscription</a></li>';
   }

   else

   { 
      echo
    '<li><a class="px-2" href="/trailery/content/form/compte.php">Mon compte</a></li>
    <li><a class="px-2" href="/trailery/content/traitements/deconnex.php">Déconnexion</a></li>';
   }

   ?>
    <!--<li>Mon compte</li>!-->
  </ul>

<div class="hidden flex justify-end menu">

  <ul class="bg-black/90 text-white p-6 absolute text-end z-10">
  <li><a href="/trailery/index.php">Accueil</a></li>
  <li><a href="/trailery/content/pages/films.php">Tous nos films</a></li>
  <li><a href="/trailery/content/form/contact.php">Contactez-nous</a></li>
  
  <?php

  if (!isset($_SESSION["pseudo"])) {
      echo
  '<li><a href="/trailery/content/form/connection.php">Connection/Inscription</a></li>';
  }

  else

  {
      echo
  '<li><a href="/trailery/content/form/compte.php?Id_user">Mon compte</a></li>
  <li><a href="/trailery/content/traitements/deconnex.php">Déconnexion</a></li>';

  }
  ?>
  <!--<li>Mon compte</li>!-->
  </ul>

</div>




