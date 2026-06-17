<!DOCTYPE hmtl>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Carros</title>
</head>
<body>

    <h2>Lista de Carros</h2>

    <?php
    $carros = array("fusca", "Gol", "Civic", "Corolla", "Onix");

    echo "<ul>";

    foreach ($carros as $carro) {
        echo "<li>$carro</li>";
    }

    echo "</ul>";
    ?>

</body>
</html>