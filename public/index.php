<?php

declare(strict_types=1);

use Entity\Collection\GenreCollection;
use Entity\Collection\TvshowCollection;
use Html\WebPage;

require_once '../src/Html/WebPage.php';

$pageweb = new WebPage();

$pageweb->setTitle("Portfolio");

$pageweb->appendCssUrl("css/style.css");

$pageweb->appendCssUrl("//use.fontawesome.com/releases/v5.0.7/css/all.css");

$pageweb->appendCssUrl("https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css");

/*
 * Première navbar
 */
$pageweb->appendContent(
    <<<HTML
    <nav class="navbar is-black" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="index.php">
                CYRIL MANIL
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item" href="index.php#profile">
                    A propos de moi
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Explorer
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="index.php#real">
                            Réalisations
                        </a>
                        <a class="navbar-item" href="index.php#studies">
                            Formation
                        </a>
                        <a class="navbar-item" href="index.php#exp">
                            Expériences professionnelles
                        </a>
                    </div>
                </div>

                <a class="navbar-item" href="contact.php">
                    Contact
                </a>
            </div>
        </div>
    </nav>
HTML
);

/*
 * Deuxième navbar
 */
$pageweb->appendContent(
    <<<HTML
    <nav class="level is-mobile p-3 has-background-dark has-text-white-ter">
        <div class="level-item has-text-centered">
            <div>
                <p class="heading">Projets</p>
                <p class="subtitle has-text-white-ter">3</p>
            </div>
        </div>
        <div class="level-item has-text-centered">
            <div>
                <p class="heading">Statut</p>
                <p class="subtitle has-text-white-ter">Etudiant</p>
            </div>
        </div>
        <div class="level-item has-text-centered">
            <div>
                <p class="heading">Qualité</p>
                <p class="subtitle has-text-white-ter">Créatif</p>
            </div>
        </div>
        <div class="level-item has-text-centered">
            <div>
                <p class="heading">Projet professionnel</p>
                <p class="subtitle has-text-white-ter">Développeur full-stack</p>
            </div>
        </div>
    </nav>
HTML
);

/*
 * Profil
 */
$pageweb->appendContent(
    <<<HTML
    <div class="container" id="profile">
        <div class="notification is-danger has-text-centered">
            <h1 class="title">
                <span class="icon pr-5">
                    <i class="fas fa-user"></i>
                </span>
                A propos de moi
            </h1>
        </div>
    </div>

    <section class="section">
        <div class="columns">
            <div class="column is-full has-text-centered">
                <figure class="image is-128x128 is-inline-block">
                    <img class="is-rounded" src="img/profile.jpg">
                </figure>

                <h2 class="subtitle pt-3">
                    <strong>Nom et prénom :</strong> MANIL Cyril
                </h2>
                <h2 class="subtitle">
                    <strong>Adresse mail :</strong> cyril.manil08@gmail.com
                </h2>
                <h2 class="subtitle">
                    <strong>Numéro de téléphone :</strong> 07 82 48 50 67
                </h2>
                <h2 class="subtitle">
                    <strong>Localisation :</strong> Reims - Charleville-Mézières - Sedan
                </h2>
                <button class="button is-danger is-outlined" onclick="location.href='contact.php'">
                    <span>Me contacter</span>
                </button>
            </div>
        </div>

        <div class="content mt-6">
            <h1 class="title">Compétences</h1>

            <hr class="solid">

            <div class="columns pt-3">
                <div class="column is-half">
                    <h2>Générales</h2>

                    <ul>
                        <li><strong>Réaliser</strong> un développement d’application</li>
                        <li><strong>Optimiser</strong> des applications informatiques</li>
                        <li><strong>Administrer</strong> des systèmes informatiques communicants complexes</li>
                        <li><strong>Gérer</strong> des données de l’information</li>
                        <li><strong>Conduire</strong> un projet</li>
                        <li><strong>Travailler</strong> dans une équipe informatique</li>
                    </ul>

                    <p>
                        Maîtrise de <strong>Visual Studio</strong>, <strong>Visual Studio Code</strong> et de la
                        <strong>suite JetBrains</strong>.
                    </p>
                    
                    <p>
                        Niveau en anglais <strong>intermédiaire</strong>.
                    </p>
                </div>

                <div class="column">
                    <h2>Langages de programmation</h2>

                    <ul>
                        <li>HTML <progress class="progress is-danger" value="70" max="100">70%</progress></li>
                        <li>CSS <progress class="progress is-danger" value="60" max="100">60%</progress></li>
                        <li>JS <progress class="progress is-danger" value="30" max="100">30%</progress></li>
                        <li>PHP <progress class="progress is-danger" value="70" max="100">70%</progress></li>
                        <li>SQL <progress class="progress is-danger" value="70" max="100">70%</progress></li>
                        <li>Python <progress class="progress is-danger" value="60" max="100">60%</progress></li>
                        <li>C# <progress class="progress is-danger" value="50" max="100">50%</progress></li>
                    </ul>

                    <p>
                        Maîtrise de <strong>ReactJS</strong>, d'<strong>API Platform</strong> et des frameworks <strong>Symfony</strong> (PHP), <strong>
                        Bulma</strong> et <strong>Bootstrap</strong> (CSS).
                    </p>
                </div>
            </div>
        </div>

        <div class="content">
            <h1 class="title">Centres d'intérêts</h1>

            <hr class="solid">

            <div class="columns pt-3">
                <div class="column is-half">
                    <h2>Sport</h2>

                    <div class="block has-text-left">
                        <figure class="image is-128x128 is-inline-block mt-4">
                            <img class="is-rounded" src="img/football.png">
                        </figure>

                        <p>
                            Le <strong>football</strong> fait partie de mes sports préférés. J'ai pratiqué ce sport
                            durant
                            <strong>5 ans</strong>, dans le club de l'<strong>US Bazeilles</strong> dans les Ardennes.
                            J'ai également continué à pratiquer le football durant mes années étudiantes, en choisissant
                            de
                            participer à l'option sport de l'IUT.
                            <br><br>
                            Cela m'a permis de développer certaines qualités comme la <strong>polyvalence</strong>, en
                            occupant le poste de milieu de terrain, mais également l'<strong>esprit d'équipe</strong>.
                        </p>
                    </div>

                    <div class="block has-text-right">
                        <figure class="image is-128x128 is-inline-block mt-4">
                            <img class="is-rounded" src="img/muscu.png">
                        </figure>

                        <p>
                            Je me suis inscrit à la salle de sport début <strong>septembre 2022</strong> et depuis, je 
                            m'y rends 5 fois par semaine. La <strong>musculation</strong> m'a permis d'avoir plus 
                            confiance en moi et de faire du sport régulièrement pour me maintenir en forme.
                        </p>
                    </div>
                </div>
                <div class="column">
                    <h2>Musique</h2>

                    <div class="block has-text-left">
                        <figure class="image is-128x128 is-inline-block mt-4">
                            <img class="is-rounded" src="img/music.png">
                        </figure>

                        <p>
                            La <strong>musique</strong> est mon passe temps favori. Que ce soit écouter de la musique
                            ou en produire, cela fait énormément partie de ma vie. Effectivement, je fais de la
                            <strong>composition</strong> de musique via le logiciel FL Studio et je pratique le
                            <strong>piano</strong> à un niveau débutant.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
HTML
);

/*
 * Réalisations
 */
$pageweb->appendContent(
    <<<HTML
    <div class="container" id="real">
        <div class="notification is-danger has-text-centered">
            <h1 class="title">
                <span class="icon pr-5">
                    <i class="fas fa-keyboard"></i>
                </span>
                Réalisations
            </h1>
        </div>
    </div>

    <div class="card m-6 pt-4 pl-6 pr-6 pb-2">
        <div class="card-image">
            <figure class="image is-16by10" id="img1">
                <img src="img/img1.png" alt="Placeholder image">
            </figure>
            <div class="middle">
                <button class="button is-danger" onclick="location.href='https://github.com/cyrilmnl'">
                    <span class="icon">
                        <i class="fab fa-github"></i>
                    </span>
                    <span>GitHub</span>
                </button>
            </div>
        </div>
        <div class="card-content pt-6">
            <div class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img src="img/profile.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="media-content">
                    <p class="title is-4">Cyril Manil</p>
                </div>
            </div>

            <div class="content">
                Portfolio réalisé dans le but de présenter mes compétences, mes expériences ainsi que ma formation. Un
                système d'envoi de mail avec un formulaire de contact est disponible.
                <br><br>
                Réalisé avec :
                <ul>
                    <li>HTML</li>
                    <li>CSS et Bulma</li>
                    <li>JS</li>
                    <li>PHP</li>
                </ul>
                Publié à
                <time datetime="2023-2-5">12:09 - 18 février 2023</time>
            </div>
        </div>
    </div>

    <hr class="solid">

    <div class="card m-6 pt-4 pl-6 pr-6 pb-2">
        <div class="card-image">
            <figure class="image is-16by10" id="img1">
                <img src="img/img2.png" alt="Placeholder image">
            </figure>
            <div class="middle">
                <button class="button is-danger" onclick="location.href='https://github.com/cyrilmnl/sae-master-ia'">
                    <span class="icon">
                        <i class="fab fa-github"></i>
                    </span>
                    <span>GitHub</span>
                </button>
            </div>
        </div>
        <div class="card-content pt-6">
            <div class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img src="img/profile.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="media-content">
                    <p class="title is-4">Cyril Manil</p>
                    <p class="subtitle is-6">En collaboration avec Mathéo Olsen, Alexis Hermant et Théo Simonet.</p>
                </div>
            </div>

            <div class="content">
                Application web destinée au parcours IA du master informatique de l'URCA, realisée dans le cadre d'une
                SAE.
                <br><br>
                Réalisé avec :
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JS</li>
                    <li>PHP et Symfony</li>
                    <li>SQL</li>
                </ul>
                Publié à
                <time datetime="2023-2-5">11:13 - 5 février 2023</time>
            </div>
        </div>
    </div>

    <hr class="solid">

    <div class="card m-6 pt-4 pl-6 pr-6 pb-2">
        <div class="card-image">
            <figure class="image is-16by10" id="img1">
                <img src="img/img3.png" alt="Placeholder image">
            </figure>
            <div class="middle">
                <button class="button is-danger" onclick="location.href='https://github.com/cyrilmnl/php-crud-tvshow'">
                    <span class="icon">
                        <i class="fab fa-github"></i>
                    </span>
                    <span>GitHub</span>
                </button>
            </div>
        </div>
        <div class="card-content pt-6">
            <div class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img src="img/profile.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="media-content">
                    <p class="title is-4">Cyril Manil</p>
                    <p class="subtitle is-6">En collaboration avec Mathéo Olsen.</p>
                </div>
            </div>

            <div class="content">
                Développement d'une application web de consultation et de modification de séries télévisées.
                <br><br>
                Réalisé avec :
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>PHP</li>
                    <li>SQL</li>
                </ul>
                Publié à
                <time datetime="2023-2-5">11:23 - 5 février 2023</time>
            </div>
        </div>
    </div>
HTML
);

/*
 * Formation
 */
$pageweb->appendContent(
    <<<HTML
    <div class="container" id="studies">
        <div class="notification is-danger has-text-centered">
            <h1 class="title">
                <span class="icon pr-5">
                    <i class="fas fa-book"></i>
                </span>
                Formation
            </h1>
        </div>
    </div>

    <section class="section">
        <h1 class="title">
            <span class="icon mr-3">
                <i class="fas fa-graduation-cap"></i>
            </span>
            Lycée
        </h1>
        <em>Lycée Pierre Bayle - Sedan</em>
        <br><br>
        <h2 class="subtitle">
            Baccalauréat général spécialités <strong>mathématiques</strong> et <strong>numérique et sciences
                informatiques</strong>.
            <br>
            Obtenu avec mention en 2021.
        </h2>

        <button class="js-modal-trigger button is-danger is-outlined" data-target="modal-js-1">
            En savoir plus
        </button>
    </section>

    <section class="section has-text-right">
        <h1 class="title">
            <span class="icon pr-5">
                <i class="fas fa-graduation-cap"></i>
            </span>
            Etudes supérieures
        </h1>
        <em>IUT RCC - Reims</em>
        <br><br>
        <h2 class="subtitle">
            Bachelor universitaire de technologie - <strong>Informatique</strong>.
            <br>
            En cours d'obtention.
        </h2>

        <button class="js-modal-trigger button is-danger is-outlined" data-target="modal-js-2">
            En savoir plus
        </button>
    </section>
HTML
);

/*
 * Expériences professionnelles
 */
$pageweb->appendContent(
    <<<HTML
    <div class="container" id="exp">
        <div class="notification is-danger has-text-centered">
            <h1 class="title">
                <span class="icon pr-5">
                    <i class="fas fa-building"></i>
                </span>
                Expériences professionnelles
            </h1>
        </div>
    </div>

    <h2 class="subtitle has-text-centered mt-5"><strong>Face Champagne-Ardenne</strong></h2>

    <div class="experience">
        <figure class="image is-3by1 mt-5" id="image">
            <img src="img/face.png">
        </figure>

        <div class="overlay">
            <div class="text">
                <h2 class="subtitle">Stage d'observation de troisième</h2>
                <hr class="solid">
                <p>
                    J'ai effectué un stage de 5 jours dans la société Face Champagne-Ardenne, qui s'occupe de
                    l'enveloppe
                    du bâtiment. J’ai découvert les différentes missions du dessinateur à la préparation d’un chantier,
                    pour cela, j’ai travaillé sur l’affaire MHCS Romont (Moët Hennessy champagne service de l’entreprise
                    Moët et Chandon) à Mailly-Champagne dans la Marne.
                </p>
            </div>
        </div>
    </div>

    <h2 class="subtitle has-text-centered mt-5"><strong>Spacefoot</strong></h2>

    <div class="experience">
        <figure class="image is-3by1 mt-5" id="image">
            <img src="img/spacefoot.png">
        </figure>

        <div class="overlay">
            <div class="text">
                <h2 class="subtitle">Stage en tant que développeur back-end</h2>
                <hr class="solid">
                <p>
                    Je n'ai pas encore commencé ce stage, mais mes missons seront de contribuer : à l'arsenal de bots
                    (web scraping), aux connecteurs Marketplaces (Amazon, CDiscount et tous les autres), aux produits
                    publicitaires innovants (publicité programmatique), au WMS maison (qui pilote les entrepôts), etc.
                </p>
            </div>
        </div>
    </div>
HTML
);

/*
 * Modal
 */
$pageweb->appendContent(
    <<<HTML
    <div id="modal-js-1" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Lycée Pierre Bayle - Sedan</p>
                <button class="delete" aria-label="close"></button>
            </header>

            <section class="modal-card-body">
                <h2 class="subtitle">Compétences et réalisations</h2>

                <ul class="pl-4">
                    <li>Création d'un <strong>site vitrine</strong></li>
                    <li>Réalisation d'un <strong>jeu du pendu</strong></li>
                    <li>Interrogation d’une <strong>base de données</strong></li>
                </ul>

                <h2 class="subtitle pt-5">Concepts fondamentaux étudiés</h2>

                <ul class="pl-4">
                    <li>Les données</li>
                    <li>Les algorithmes</li>
                    <li>Les langages</li>
                    <li>Les machines</li>
                </ul>
            </section>

            <footer class="modal-card-foot">
                <button class="button is-danger is-outlined"
                    onclick="location.href='https://sitetab3.ac-reims.fr/lyc-bayle/-wp-/?doing_wp_cron=1675595049.2515480518341064453125'">Voir
                    le site de la formation</button>
            </footer>
        </div>
    </div>

    <div id="modal-js-2" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">IUT RCC - Reims</p>
                <button class="delete" aria-label="close"></button>
            </header>

            <section class="modal-card-body">
                <h2 class="subtitle">Compétences et réalisations</h2>

                <ul class="pl-4">
                    <li>Utilisation de <strong>Git</strong></li>
                    <li>Utilisation de <strong>Linux</strong></li>
                    <li>Utilisation de <strong>Docker</strong></li>

                    <li class="pt-5">Construction et résolution de <strong>labyrinthes</strong> parfaits</li>
                    <li>Développement de deux <strong>applications web</strong></li>
                    <li>Réalisation d'une <strong>bataille navale</strong></li>
                    <li>Conception de l'<strong>interface</strong> d'une application mobile</li>
                    <li>Installation de <strong>services réseau</strong></li>
                    <li>Exploitation d’une <strong>base de données</strong></li>
                    <li>Gestion d’un <strong>projet informatique</strong></li>
                </ul>

                <h2 class="subtitle pt-5">Matières abordées</h2>

                <ul class="pl-4">
                    <li>Algorithmique et programmation</li>
                    <li>Bases de données</li>
                    <li>Web et mobilité</li>
                    <li>Systèmes et réseaux</li>
                    <li>Mathématiques</li>
                </ul>
            </section>

            <footer class="modal-card-foot">
                <button class="button is-danger is-outlined" onclick="location.href='https://www.iut-rcc.fr/'">Voir le
                    site de la formation</button>
            </footer>
        </div>
    </div>
HTML
);

/*
 * Bouton top et footer
 */
$pageweb->appendContent(
    <<<HTML
    <div id="scroll_to_top">
        <span class="tag is-danger is-large">
            <span class="icon">
                <a href="#top"><i class="fas fa-arrow-up"></i></a>
            </span>
        </span>
    </div>

    <footer class="footer has-background-dark has-text-white-ter mt-6">
        <div class="content has-text-centered">
            <p>
                Bulma by <a href="index.php">Cyril Manil</a>. The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
            </p>
        </div>
    </footer>
HTML
);

$pageweb->appendJsUrl("js/burger.js");

$pageweb->appendJsUrl("js/modal.js");

$pageweb->appendJsUrl("js/top.js");

echo $pageweb->toHTML();
