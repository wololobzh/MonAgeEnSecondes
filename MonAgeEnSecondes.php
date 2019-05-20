<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon age en secondes</title>
</head>
<body>
<?php
    //Récupère le timestamp de la date 5/10/1985 à 16:01:45.
    $dateDeNaissance= mktime(16,1,45,10,5,1985);
    //Récupère le timestamp de tout de suite.
    $aujourdhui=time();
    //Différence entre les deux dates.
    $age=$aujourdhui - $dateDeNaissance;
    echo "J'ai $age secondes";
?>
</body>
</html>