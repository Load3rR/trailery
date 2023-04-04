<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/output.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Gérer les films</title>
</head>
<?php



require_once('../../content/traitements/access.php');

$sql = "SELECT * FROM films";

// Préparer la requête SQL
$stmt = $pdo->prepare($sql);

// Exécuter la requête
$stmt->execute();

// Récupérer les données
$films = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<body class="bg-[#BBBBBB] bg-fixed bg-[url('../../asset/img/bg.png')] bg-cover bg-no-repeat">

  <h1 class="text-white m-6 text-center text-xl">Gérer les films</h1>

  <div class="flex justify-center">
    
    <a href="ajouter_film.php" class="flex bg-[#FDD835]/90 rounded mb-8 p-2 mx-36 my-3 justify-center hover:bg-black hover:text-white">Ajouter un film</a>
  </div>
  <div class="flex justify-center bg-black/70 p-12 mx-40 rounded">

    <table class="border border-black bg-white/70 p-2 m-2 max-w-xl rounded">
      <thead class="border-2 border-black">
        <tr>
          <th class="border border-black">Id</th>
          <th class="border border-black">Titre</th>
          <th class="border border-black">trailer</th>
          <th class="border border-black">Synopsis</th>
          <th class="border border-black">Année</th>
          <th class="border border-black">Image</th>
          <th class="border border-black">Modifier</th>
          <th class="border border-black">Supprimer</th>
        </tr>
      </thead>
      <tbody class="border-2 border-black">
        <?php
        foreach ($films as $film) {
        ?>
          <tr>
            <td class="border border-black max-w-xs"><?php echo $film['id_films'] ?></td>
            <td class="border border-black max-w-xs"><?php echo ($film['titre']) ?></td>
            <td class="border border-black max-w-xs"><?php echo ($film['trailer']) ?></td>
            <td class="border border-black max-w-xs line-clamp-1"><?php echo ($film['synopsis']) ?></td>
            <td class="border border-black max-w-xs"><?php echo ($film['annee']) ?></td>
            <td class="border border-black max-w-xs"><?php echo $film['image'] ?></td>
            <td class="border border-black max-w-xs m-2"><a href="update_film?id_films=<?php echo $film['id_films'] ?>" class="bg-[#4CAF50] p-1 m-2 text-white rounded">Modifier</a></td>

            <td class="border border-black max-w-xs m-2 p-2"><a href="../traitements/traitement_delete.php?id_films=<?php echo $film['id_films'] ?>" class="bg-[#df1f1f] p-1 m-2 text-white rounded">Supprimer</a></td>
          </tr>

        <?php
        }
        ?>
      </tbody>

    </table>

  </div>

</body>

</html>