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
            <a href="formulaire.php">CONTACT</a>
        </nav>
</header>                                                                           ²
    <main>
        <div class="contenair">
            >
                <?php
    
                    $sql = "SELECT * FROM projet WHERE id_projet=" . $_GET['id'];
                    $projets = mysqli_query($connexion, $sql);
                ?>
                <?php if($projets) : ?>
                    <?php foreach($projets as $projet) : ?>
                    <div class="projet">
                        <div class="image-container">
                            <img src="<?php echo $projet['image-1'] ?>" alt="<?= $projet['titre'] ?>">
                            <img src="<?php echo $projet['image-2'] ?>" alt="<?= $projet['titre'] ?>">
                        </div>
                    </div>
                    <h2><?= $projet['titrex'] ?></h2>
                    <p><?= $projet['description'] ?></p>
                    <?php endforeach ?>
                <?php endif ?>
        </div>
    </main>
    <footer>
        <a href="formulaire.php">CONTACTEZ-MOI</a>
        <p>© Copyright 2023 | Moustapha SABIR | Tous droits réservés</p>
        <ul>
            <li>Mentions légales</li>
            <li>Plan du site</li>
        </ul>
    </footer>
</body>
</html>
 