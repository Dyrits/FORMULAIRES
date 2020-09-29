<?php
require_once './Form.class.php';

$validated = filter_input(INPUT_POST, 'Valider', FILTER_SANITIZE_STRING);
if (!$validated) {
    $formulaire = new Form("POST", "#", "S'abonner");
    $formulaire->setInput("email", "E-Mail");
    $formulaire->setInput("hidden", "UserAgent", ['value'=>$_SERVER['HTTP_USER_AGENT']], false);
    $formulaire->setSubmit('Valider');
    echo $formulaire->getForm();
} else {
    $email = filter_input(INPUT_POST, 'E-Mail', FILTER_SANITIZE_EMAIL);
    $userAgent = filter_input(INPUT_POST, 'UserAgent', FILTER_SANITIZE_STRING);
    echo "E-Mail : $email ; Agent : $userAgent";
}

