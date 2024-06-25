<h1>Administration</h1>

<a href="contact-list.php">Contacts</a> | <a href="realisation-admin.php">Projets-portfolio</a>|
<a href="ajout-realisation.php">Ajout BDD</a>

<h2>Ajout projet</h2>
<?php

// include 'db.php';
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "portefolio";

// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

    // Exécution de la requête SQL
  // Exécution de la requête SQL
//                                         

// if (isset($_POST['name'])) {
//     $id_projet = $_POST['id_projet'];
//     $titre = $_POST['titre'];
//     $image = $_POST['image'];
//     $description = $_POST['description'];
//     $detail = $_POST['detail'];
//     $sql = "INSERT INTO `projet`(`id_projet`, `titre`, `image`, `description`, `detail`) 
//     VALUES ('$id_projet', '$titre', '$image', '$description', '$detail')";
// //   print_r($sql);
//     // Afficher la requête SQL pour débogage
//     echo "Requête SQL : $sql<br>";
// }
if(isset($_POST['titre'])){
    echo 'le formulaire a été soumis correctement';
    $titre = mysqli_real_escape_string($connexion, $_POST['titre']);
    $description = mysqli_real_escape_string($connexion, $_POST['description']);
    $image = mysqli_real_escape_string($connexion, $_POST['image']);
   
    //$sql= "UPDATE projet (`titre`, `description`, `image`) VALUES (`$titre`,`$description`,`$image`)";
    $sql= "UPDATE projet
    SET titre = '$titre',
    description = '$description',
    image = '$image'
    WHERE id =" .  $_GET['id'];
    mysqli_query($connexion, $sql);
}
$projets = mysqli_query($connexion, $sql);


mysqli_close($connexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/>
    <title>Document</title>
</head>
<body>
<main>
    <div class="contact-form">
            <h3>Ajout :</h3>
            <form action="" method="post">
                <label for="name">titre* :</label>
                <input type="text" id="name" name="name" required>
             
                <label for="image">image* :</label>
                <input type="text" id="image" name="image" required>
               
                <label for="description">Description* :</label>
                <input type="text" name="description" id="description">
            
                <label for="Detail">Detail* :</label>
                <input type="text" name="Detail" id="Detail">
             
                <button type="submit" name="valider">Envoyer</button> 
                <button type="reset">Annuler</button>
            </form>
    </div>
</body>
</html>
