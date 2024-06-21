<?php
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "portefolio";

// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

if (!$connexion) {
    die("Connexion échouée : " . mysqli_connect_error());
}
?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Styles/reset.css">
    <link rel="stylesheet" href="Styles/interface.css">
    <link rel="stylesheet" href="Styles/accueil.css">

</head>
<body>
    <header>
        <nav>
            <img src="./images/logo-nav-masta.png" alt="logo" class="logo">
            <a href="accueil.php">ACCUEIL</a>
            <a href="realisation.php">MES PROJETS</a>
            <a href="mon-cv.html">MON CV</a>
            <a href="confirmation.php">CONTACT</a>
        </nav>
</header>                                                                           ²
    <main>
        <div class="contenair">
            <div class="projet projet-1">
                <?php
                    $sql = "SELECT * FROM projet INNER JOIN categorie_projet ON categorie_projet.id_categorie = projet.id_categorie WHERE categorie_projet.id_categorie = 3";
                    $projets = mysqli_query($connexion, $sql);
                ?>
                <?php if($projets) : ?>
                    <?php foreach($projets as $projet) : ?>
                        <div class="image-container">
                            <img src="<?php echo $projet['image'] ?>" alt="<?= $projet['titre'] ?>">
                        </div>
                        <h2><?= $projet['titre'] ?></h2>
                        <p><?= $projet['description'] ?></p>
                        <!-- <button class="link-button" onclick="window.location.href='description.php'">En savoir plus<button> -->
                        <!-- <a href="description.php">En savoir plus</a> -->
                       <!-- <input type="submit" value="En savoir plus" id_categorie =" 3">  -->
                        <!-- <button href="description.php">En savoir plus</button>  -->
                        <!-- <input type="hidden" name="id_categorie" value="3">
                        <input type="submit" value="En savoir plus"> -->

                    <?php endforeach ?>
                <?php endif ?>
            </div>
            <div class="projet projet-2">
                <?php
                    $sql = "SELECT * FROM projet INNER JOIN categorie_projet ON categorie_projet.id_categorie = projet.id_categorie WHERE categorie_projet.id_categorie = 4";
                    $projets = mysqli_query($connexion, $sql);
                ?>
                <?php if($projets) : ?>
                    <?php foreach($projets as $projet) : ?>
                        <div class="image-container">
                            <img src="<?php echo $projet['image'] ?>" alt="<?= $projet['titre'] ?>">
                        </div>
                        <h2><?= $projet['titre'] ?></h2>
                        <p><?= $projet['description'] ?></p>
                        <!-- <button href="description.php">En savoir plus</button> -->
                        <!-- <a href="description.php">En savoir plus</a> -->
                        <!-- <button class="link-button" onclick="window.location.href='description.php'">En savoir plus<button> -->
                    <?php endforeach ?>
                <?php endif ?>
          
                
            </div>
        </div>
    </main>
    <footer>
        <a href="confirmation.php">CONTACTEZ-MOI</a>
        <p>© Copyright 2023 | Moustapha SABIR | Tous droits réservés</p>
        <ul>
            <li>Mentions légales</li>
            <li>Plan du site</li>
        </ul>
    </footer>
</body>
</html>
 