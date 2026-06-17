<!DOCTYPE hmtl>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Cidades</title>
</head>
<body>

    <h2>Lista de Cidades</h2>

    <?php
    $cidades = array("Palmas","São Paulo","Rio de janeiro","Brasilia","Salvador");

    foreach ($cidades as $cidade) {
        echo "<p>$cidade</p>";
    }
    ?>

</body>
</html>