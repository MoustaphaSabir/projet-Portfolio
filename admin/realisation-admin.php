<h1>Administration</h1>

<a href="contact-list.php">Contacts</a> | <a href="realisation-admin.php">Projets-portfolio</a>|
<a href="ajout-realisation.php">Ajout BDD</a>

<h2>Porjet</h2>
<?php

// include 'db.php';
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "portefolio";

// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifier la connexion
if (!$connexion) {
die("Échec de la connexion : " . mysqli_connect_error());
} else {
echo "Connexion réussie à la base de données.";
// print_r($connexion);
}


if (isset($_GET['id_projet'])){
    $sql ="DELETE FROM projet WHERE id_projet=" . $_GET['id_projet'] ;
    $projets = mysqli_query($connexion, $sql);
}

echo "<br>";
$sql = "SELECT * FROM projet";

$projets = mysqli_query($connexion, $sql);
// Vérifier si la requête a réussi



 if($projets) : ?>
    <?php foreach($projets as $projet) : ?>
        <div class="image-container">
            <img src="<?php echo $projet['image'] ?>" alt="<?= $projet['titre'] ?>">
        </div>
        <h2><?= $projet['titre'] ?></h2>
        <p><?= $projet['description'] ?></p>> 
        <a href="">Modifier</a>
        <br>
        <a href="realisation-admin.php?id_projet=<?= $projet['id_projet'] ?>">Supprimer</a>
    <?php endforeach ?>

<?php endif ?>
 

<a href="ajout-realisation.php">ajout-realisation</a>