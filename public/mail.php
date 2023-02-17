<?php

require_once "../vendor/autoload.php";

use \Mailjet\Resources;

define('API_PUBLIC_KEY', '005d4de7e1bf0581dd7d2459620a5dfc');
define('API_PRIVATE_KEY', 'f066b63c4d4112cc233c5bc8791bd13f');

$mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY, true, ['version' => 'v3.1']);

if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['mail']) && isset($_POST['object']) && isset($_POST['message'])) {
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $mail = htmlspecialchars($_POST['mail']);
    $object = htmlspecialchars($_POST['object']);
    $message = htmlspecialchars($_POST['message']);

    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "$mail",
                        'Name' => "$firstname" . " $lastname"
                    ],
                    'To' => [
                        [
                            'Email' => "cyril.manil08@gmail.com",
                            'Name' => "Cyril Manil"
                        ]
                    ],
                    'Subject' => "$object",
                    'TextPart' => "$message",
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();
        echo "Email envoyé avec succès !";
    } else {
        echo "Email non valide";
    }
} else {
    header('Location: index.html');
    die();
}