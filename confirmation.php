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
// Vérification de la validation du formulaire
if (isset($_POST['valider'])) {

    echo "Formulaire soumis<br>";

    // Récupération des valeurs du formulaire
    $nom = $_POST['name'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['tel'];
    $message = $_POST['message'];
    print_r($_POST);
    // Afficher les valeurs récupérées pour vérification
   
    // Requête d'insertion dans la table compte
    $sql = "INSERT INTO `contact`(`name`, `prenom`, `email`, `telephone`, `message`) 
    VALUES ('$nom', '$prenom', '$email', '$telephone', '$message')";
  print_r($sql);
    // Afficher la requête SQL pour débogage
    echo "Requête SQL : $sql<br>";

    // Exécution de la requête SQL
    if (mysqli_query($connexion, $sql)) {
        echo "Données insérées avec succès.<br>";
    } else {
        echo "Erreur lors de l'insertion des données : " . mysqli_error($connexion) . "<br>";
    }
} else {
    echo "Formulaire non soumis<br>";
}

mysqli_close($connexion);
?>
 <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="Styles/reset.css">
         <link rel="stylesheet" href="Styles/accueil.css">
         <link rel="stylesheet" href="Styles/contact.css">
         <title>contact</title>
     </head>
     <body>
         <header>
             <nav>
                 <img src="./images/logo-nav-masta.png" alt="logo" class="logo">
                 <a href="./accueil.php">ACCUEIL</a>
                 <a href="./realisation.php">MES PROJETS</a>
                 <a href="./mon-cv.html">MON CV</a>
                 <a href="./confirmation.php">CONTACT</a>
             </nav>
         </header>
         <main>
             <div class="contact-form">
                 <h3>Contactez-moi :</h3>
                 <form action="" method="post">
                     <label for="name">Nom* :</label>
                     <input type="text" id="name" name="name" required>
                     <br>
                     <label for="prenom">Prenom* :</label>
                     <input type="text" id="prenom" name="prenom" required>
                     <br>
                     <label for="email">Email* :</label>
                     <input type="email" name="email" id="email">
                     <br>
                     <label for="tel">Téléphone* :</label>
                     <input type="tel" id="tel" name="tel" required>
                     <br>
                     <label for="message">Message :</label>
                     <textarea id="message" name="message" required></textarea>
                     <br>
                     <button type="submit" name="valider">Envoyer</button> 
                     <button type="reset">Annuler</button>
                 </form>
                 <div class="bloc-contact">
                     <a href="mailto:cheniadam3@gmail.com">cheniadam3@gmail.com</a>
                     <a href="tel:+605954312">0605954312</a>
                     <a href="http://www.linkedin.com/in/moustapha-sabir-moussa-5b00a0228" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                     <a href="http://https://www.google.com/maps/place/86000+Poitiers/@46.584682,0.3301719,13z/data=!3m1!4b1!4m6!3m5!1s0x47fdbe72439eb3ab:0x97de2319c5e09093!8m2!3d46.5798429!4d0.3416875!16zL20vMGRsMmc?entry=ttu" target="_blank" rel="noopener noreferrer">86000 Poitiers</a>
                 </div>
                 <a href="./admin/contact-list.php">Admin</a>
             </div>
            
         </main>
         <footer>
             <a href="contact.html">CONTACTEZ-MOI</a>
             <p>© Copyright 2023 | Moustapha SABIR | Tous droits réservés</p>
             <ul>
                 <li>Mentions légales</li>
                 <li>Plan du site</li>
             </ul>
         </footer>
     </body>
     </html>
     

