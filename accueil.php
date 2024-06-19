<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
     <link rel="stylesheet" href="Styles/reset.css">
     <link rel="stylesheet" href="Styles/accueil.css">
     <script>
         src="https://unpkg.com/@futuravision/futura.js/dist/futurajs.min.js">
     </script>
    <title>Accueil</title>
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
    </header>
    <div class="hero-header">
        <div>
            <h1 class="nom">Moustapha SABIR| Futur Developpeur Web</h1>
            <!-- Lien vers la page d'accueil -->
        </div>
    </div>
    <main>
        <div class="contenair">
            <section class="bloc-competences">
                <h1>COMPETENCES</h1>
                <h2>FRONT END</h2>
                <div class="skill">
                    <p>HTML 5</p>
                    <div class="bar">
                        <div class="progress" style="width: 80%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>CSS</p>
                    <div class="bar">
                        <div class="progress" style="width: 70%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>JavaScript: événements, gestion du DOM</p>
                    <div class="bar">
                        <div class="progress" style="width: 40%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>Responsive</p>
                    <div class="bar">
                        <div class="progress" style="width: 45%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>Git/GitHub</p>
                    <div class="bar">
                        <div class="progress" style="width: 40%;"></div>
                    </div>
                </div>
                <h2>Développement Back END</h2>
                <div class="skill">
                    <p>PHP</p>
                    <div class="bar">
                        <div class="progress" style="width: 65%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>MySQL</p>
                    <div class="bar">
                        <div class="progress" style="width: 60%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>Intégration de l’IA</p>
                    <div class="bar">
                        <div class="progress" style="width: 50%;"></div>
                    </div>
                </div>
            </section>
            <section class="bloc-presentation">
                <div class="photo-presentation">
                    <img src="images/M.ico" alt="MA photo">
                </div>
                <div class="presentation">
                    <h1>PRESENTATIONS</h1>
                    <p>Bonjour,</p>
                    <p>Actuellement en formation préparatoire au titre professionnel Développeur 
                        web et web mobile à l’Ecole Atypique .</p>
                    <p>Passionné par le développement web et Web mobile, objectif? trouver 
                        une alternance à compter du 02 septembre 2024 pour mettre mes compétences en action 
                        et préparer le titreprofessionnel « Développeur web et web mobile »</p>
                </div>
            </section>
            <section class="bloc-diplome">
                <h1>DIPLOMES</h1>
                <h3>FORMATION PRÉPARATOIRE AU TITRE PROFESSIONNELDÉVELOPPEUR WEB ET WEB MOBILE</h3>
                <p>Du 18 décembre 2023 au 26 juillet 2024</p>
                <h3>BTS Management Commercial Operationnel</h3>
                <H3>BAC General scientifique</H3>
            </section>
            <section class="experiences">
                <h1>EXPERIENCES</h1>
                <h3>BIOCOOP-Paris 18</h3>
                <p>Assistant Manageur/ CDD</p>
                <P>Janvier au Décembre 2023</P>
                <!-- <ul>
                    <li>Fidélisation des clients et développement des ventes</li>
                    <li>Gestion de la caisse et l’accueil client & Maintien de l’attractivité des rayons </li>
                </ul> -->
            </section>
            <script src="scripts.js"></script>
        </div>
        <h1 data-fv-anim='autowrite' data-fv-data="Write Here Your Text"></h1>
        <!-- <p>Ajout du paragraphe</p> -->
        <p data-fv-anim='autowrite' data-fv-data="This is an example of autowrite in a paragraph."></p>

        <script type="text/javascript">
            new fJs.AutoWriteText({
                separator: 'Hello wirld|hi',
                timeout: 300
            });
        </script>
    <footer>
        <!-- <img src="/images/logo-nav-masta.png" alt="logo" class="logo"> -->
        <a href="confirmation.php">CONTACT-MOI</a>
        <p>© Copyright 2023 | Moustapha SABIR | Tous droits réservés</p>
        <ul>
            <li>Mentions légale</li>
            <li>Plan du site</li>
        </ul>
    </footer>
</body>
</html>