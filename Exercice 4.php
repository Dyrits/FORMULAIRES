<?php
require_once './Form.class.php';
$calculated = filter_input(INPUT_POST, 'Calculer', FILTER_SANITIZE_STRING);
$prix = filter_input(INPUT_POST, 'PrixHT', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$tva = filter_input(INPUT_POST, 'TauxDeTVA', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$validData = $calculated && $prix && $tva;
$formulaire = new Form('POST', '#', 'Calcul des taxes');
if (!$validData) {
    $formulaire->setInput("number", "Prix HT", ['step'=>'0.01'], true, "€");
    $formulaire->setInput("number", "Taux de TVA", ['step'=>'0.1'], true, "%");
    $formulaire->setSubmit("Calculer");
} else {
    $formulaire->setInput("number", "Prix HT", ['step'=>'0.01', 'value'=>$prix], true, "€");
    $formulaire->setInput("number", "Taux de TVA", ['step'=>'0.1', 'value'=>$tva], true, "%");
    $formulaire->setSubmit("Calculer");
    $montantTVA = $prix * $tva / 100;
    $prixTTC = $prix * (1 + $tva / 100);
    $formulaire->setInput("number", "Montant de la TVA", ['readonly'=>'readonly', 'value'=>$montantTVA], true, "€");
    $formulaire->setInput("number", "Prix TTC", ['readonly'=>'readonly', 'value'=>$prixTTC], true, "€");
}
echo $formulaire->getForm();
