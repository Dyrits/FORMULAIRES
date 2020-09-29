<?php
require_once './Form.class.php';

$formulaire = new Form('POST', 'exercice1-traitement.php', 'Adresse client');
$formulaire->setInput("text", "Nom",
    ['placeholder' => 'votre nom...',
    'title' => 'Entrez ici votre nom',
    'maxlength' => '30',
    'required'=>"required"]
);
$formulaire->setInput("text", "Prénom",
    ['placeholder' => 'votre prénom...',
    'title' => 'Entrez ici votre prénom',
    'maxlength' => '30',
    'required'=>"required"]
);
$formulaire->setInput("text", "Adresse",
    ['placeholder' => 'le numéro et nom de la rue...',
    'title' => 'Entrez ici votre adresse',
    'maxlength' => '120']
);
$formulaire->setInput("text", "CP",
    ['placeholder' => 'votre code postal...',
    'title' => 'Entrez ici votre code postal',
    'maxlength' => '5']
);
$formulaire->setInput("text", "Ville",
    ['placeholder' => 'votre ville...',
    'title' => 'Entrez ici votre ville',
    'maxlength' => '50']
);
$formulaire->setSubmit('Envoyer le formulaire');
echo $formulaire->getForm();
