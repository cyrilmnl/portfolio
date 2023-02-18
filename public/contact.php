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
 * Indications de contact
 */
$pageweb->appendContent(
    <<<HTML
    <div class="container" id="profile">
        <div class="notification is-danger has-text-centered">
            <h1 class="title">
                <span class="icon pr-5">
                    <i class="fas fa-phone"></i>
                </span>
                Contactez-moi
            </h1>
        </div>
    </div>

    <section class="section has-text-centered">
        <h2 class="subtitle">Contactez-moi par <strong>téléphone</strong> : 07 82 48 50 67</h2>
        <h2 class="subtitle">ou en remplissant le <strong>formulaire</strong> ci dessous.</h2>
    </section>
HTML
);

/*
 * Formulaire de contact
 */
$pageweb->appendContent(
    <<<HTML
    <section class="section" id="contact">
        <form action="mail.php" method="POST">
            <div class="field">
                <label class="label">Nom <span style="color: red;">*</span></label>
                <div class="control">
                    <input name="lastname" class="input is-black" type="text" placeholder="Nom de famille" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Prénom <span style="color: red;">*</span></label>
                <div class="control">
                    <input name="firstname" class="input is-black" type="text" placeholder="Prénom" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Adresse mail <span style="color: red;">*</span></label>
                <div class="control">
                    <input name="mail" class="input is-black" type="email" placeholder="e.g. yourname@example.com" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Objet</label>
                <div class="control">
                    <div class="select">
                        <select name="object">
                            <option>Autre</option>
                            <option>Demande professionnelle</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Message <span style="color: red;">*</span></label>
                <div class="control">
                    <textarea name="message" class="textarea is-black" placeholder="Entrez votre message..." required></textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-danger">Envoyer</button>
                </div>
            </div>

            <p><span style="color: red;">*</span> champs obligatoires</p>
        </form>
    </section>
HTML
);

/*
 * Informations personnelles et footer
 */
$pageweb->appendContent(
    <<<HTML
    <section class="section has-text-centered">
        <h2 class="subtitle">Vous pouvez me retrouver <strong>ici</strong> :</h2>

        <h2 class="subtitle">
            <span class="icon">
                <i class="fab fa-linkedin"></i>
            </span>
            <a href="https://www.linkedin.com/in/cyril-manil-a40a1924b/">LinkedIn</a>
        </h2>

        <h2 class="subtitle">
            <span class="icon">
                <i class="fab fa-github"></i>
            </span>
            <a href="https://github.com/cyrilmnl">GitHub</a>
        </h2>
    </section>

    <footer class="footer has-background-dark has-text-white-ter">
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

echo $pageweb->toHTML();
