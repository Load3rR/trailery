<?php
require_once('access.php');
//creer la $id qui est égale a id_films(champ bdd) dans la supervariable $GET
$id = $_GET['id_films'];
//var_dump($_FILES);
//creer les variables correspondant au entrée des input du formulaire (method $post)
$titre = $_POST['titre'];
$trailer = $_POST['trailer'];
$synopsis = $_POST['synopsis'];
$annee = $_POST['annee'];

//test et traitement image
if(!empty($_FILES['image']))
{
    $nameFile = $_FILES['image']['name'];
    $typeFile = $_FILES['image']['type'];
    $tmpFile = $_FILES['image']['tmp_name'];
    $errorFile = $_FILES['image']['error'];
    $sizeFile = $_FILES['image']['size'];
    //var_dump($_FILES);
    //die();
    $extensions = ['png', 'jpg', 'jpeg', 'gif', 'jiff','webp'];
    $type = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif', 'image/jiff', 'image/webp'];

    $extension = explode('.', $nameFile);

    $max_size =5000000;

    if(in_array($typeFile, $type))
    {

        if(count($extension) <=2 && in_array(strtolower(end($extension)), $extensions))
        {
            if($sizeFile <= $max_size && $errorFile == 0)
            {
                if(move_uploaded_file($tmpFile, $image = '../../asset/upload'.'/' . uniqid() . '.' . end($extension)))
                {

                    echo "upload  effectué !";
                }
                else
                {
                    echo "Echec de l'upload de l'image !";
                }
            }
            else
            {
                echo "Erreur le poids de l'image est trop élevé !";
            }
        }
        else
        {
            echo "Merci d'upload une image !";
        }
    }
    else
    {
        echo "Type non autorisé !";
    }
}
$image = substr($image, 19);
                    //var_dump($_FILES);
                    //die();


$sql = $pdo->prepare("UPDATE films SET titre =?, trailer=?, synopsis=?, annee=?, image=? WHERE id_films=?");//$id

$sql->execute([$titre, $trailer, $synopsis, $annee, $image, $id]);

header("Location: ../pages/admin.php");

