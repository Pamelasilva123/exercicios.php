<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Número ímpares</title>
</head>
<body>
     
    <h1>Números ímpares</h1>

    <?php
    $numeros = array(1,2,3,4,5);

    foreach ($numeros as $numero) {
        if ($numero % 2 != 0) {
        }
            echo "<p>$numero</p>";
    }

    ?>

<body>
</html>