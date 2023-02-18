<?php

declare(strict_types=1);

use Entity\Collection\GenreCollection;
use Entity\Collection\TvshowCollection;
use Html\WebPage;

require_once '../src/Html/WebPage.php';

$pageweb = new WebPage();

$pageweb->setTitle("Réponse de l'envoi");

$pageweb->appendCssUrl("css/style.css");

$pageweb->appendCssUrl("https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css");

if ($_GET["value"] == "true") {
    $pageweb->appendContent(
        <<<HTML
        <p>Email envoyé avec <strong>succès</strong> ! Vous serez redirigé dans 3 secondes...</p>
    HTML
    );
    header( "refresh:3;url=index.php" );
} else {
    $pageweb->appendContent(
        <<<HTML
        <p>Email <strong>non valide</strong>. Vous serez de nouveau redirigé vers le formulaire dans 3 secondes...</p>
    HTML
    );
    header( "refresh:3;url=contact.php" );
}

echo $pageweb->toHTML();
