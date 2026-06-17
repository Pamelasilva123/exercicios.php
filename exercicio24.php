<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Animais</title>
</head>
<body>

    <h1>Animais<h1>
    
    <?php
    $animais = array("Cachorro","Gato","Coelho","Papagaio","Tartaruga");

    foreach ($animais as $animal) {
        echo "<p>$animal</p>";
    }
    ?>

</body>
</html>