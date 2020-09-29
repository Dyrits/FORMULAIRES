<?php
$redirection = filter_input(INPUT_GET, 'redirection', FILTER_SANITIZE_STRING);
if ($redirection) { header('location: '.$redirection); }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
</head>
<body>
<form action="" method="GET">
    <fieldset><legend>Vous souhaitez...</legend>
        <button type="submit" name="redirection" value="https://www.google.com/search?q=acheter">Acheter</button>
        <button type="submit" name="redirection" value="https://www.google.com/search?q=vendre">Vendre</button>
        <button type="submit" name="redirection" value="https://www.google.com/search?q=louer">Louer</button>
    </fieldset>
</form>
</body>
</html>