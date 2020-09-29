<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1</title>
</head>
<body>
<table>
    <tr><th>nom</th><th>prénom</th><th>adresse</th><th>code postal</th>
        <th>ville</th></tr>
    <tr>
        <td><?=filter_var($_POST['Nom'], FILTER_SANITIZE_STRING)?></td>
        <td><?=filter_input(INPUT_POST, 'Prénom', FILTER_SANITIZE_STRING)?></td>
        <td><?=$_POST['Adresse']?></td>
        <td><?=filter_input(INPUT_POST, 'CP', FILTER_SANITIZE_NUMBER_INT)?></td>
        <td><?=$_POST['Ville']?></td>
    </tr>
</table>
</body>
</html>