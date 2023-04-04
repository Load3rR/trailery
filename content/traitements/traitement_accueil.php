     <?php 

     //Requête SQL pour sélectionner les informations sur tous les films
     $sql = "SELECT films.id_films, films.titre, films.synopsis, films.image
     FROM films LIMIT 6";
     $stmt = $pdo->prepare($sql);
     //Préparer la requête SQL

     //Exécuter la requête
     $stmt->execute();
     $films = $stmt->fetchAll(PDO::FETCH_ASSOC);

     ?>