<!-- /*Administration du site (gestion de contenu) :
 
- Page Lister les projets : projet-liste.php
	- Ajouter un bouton "Nouveau projet"
	- Pour chaque projet (chaque ligne) : 
		- ajouter un lien de suppression : projet-supprimer.php?id=7
		- ajouter un lien de modification : projet-modifier.php?id=7
 
- Page Nouveau projet : projet-creer.php
 
- Page Modification de projet : projet-modifier.php?id=7
	- Récupère l'id : $GET['id']
	- Faire une requete de select sur cette id
	- Ecrire dans le formulaire :  -->
<!-- <input name="titre" value="<?/*php echo $ligne['titre']*/; ?>"> -->
	<!-- - Faire un update de la ligne via sont id -->
 
<!-- - Page Supprimer proejt : projet-supprimer.php?id=7
*/ -->

<h1>Administration</h1>

<a href="contact-list.php">Contacts</a> | <a href="realisation-admin.php">Projets-portfolio</a>|
<a href="ajout-realisation.php">Ajout BDD</a>
<h2>Contact</h2>
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
echo "<br>";
$sql = "SELECT * FROM contact";
$contacts = mysqli_query($connexion, $sql);
// Vérifier si la requête a réussi
echo "<ul>";
/*($contacts) {
// print_r($cours);
foreach($contacts as $contact) {
echo "<li class='element'>" . $contact['name']. ' - ' . $contact['prenom'] .' - '
. $contact['email'] . ' - ' . $contact['telephone'] . ' - ' . $contact['message'] .
' - ' . $contact['date_soumission'] .
'</>'. "<br>". "</li>";
}
} else {
echo "Erreur : " . mysqli_error($connexion);
}
echo "</ul>";
echo '<br>';   */
if ($contacts) {
    echo "<ul>";
    foreach ($contacts as $contact) {
        echo "
            <li class='element'>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td>{$contact['name']}</td>
                    </tr>
                    <tr>
                        <td>Prénom:</td>
                        <td>{$contact['prenom']}</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>{$contact['email']}</td>
                    </tr>
                    <tr>
                        <td>Téléphone:</td>
                        <td>{$contact['telephone']}</td>
                    </tr>
                    <tr>
                        <td>Message:</td>
                        <td>{$contact['message']}</td>
                    </tr>
                    <tr>
                        <td>Date de soumission:</td>
                        <td>{$contact['date_soumission']}</td>
                    </tr>
                </table>
            </li>
        ";
    }
    echo "</ul>";
} else {
    echo "Erreur : " . mysqli_error($connexion);
}
echo '<br>';


// Vérifier si le formulaire est soumis pour mettre à jour le contact
if (isset($_POST['valider'])) {

    $id = $_POST['id_contact'];
    $nom = $_POST['name'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['tel'];
    $message = $_POST['message'];

    // Requête pour mettre à jour le contact
    $sql_update = "UPDATE contact SET name='$nom', prenom='$prenom', email='$email', 
    telephone='$telephone', message='$message' WHERE id_contact = '$id'";

    if (mysqli_query($connexion, $sql_update)) {
        echo "Contact mis à jour avec succès";
        // Rediriger vers la liste des contacts après la mise à jour
        header("Location: confirmation.php");
        exit;
    } else {
        echo "Erreur  du contact : " . mysqli_error($connexion);
    }
}
// $sql = "DELETE FROM contact
// WHERE id_contact = 10;


