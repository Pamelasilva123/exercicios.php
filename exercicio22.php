<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de  Produtos</title>
</head>
<body>

    <h1>Lista de Produtos</h1>

    <?php
    $produtos = array ("Notebook","Mouse","Teclado","Impressora");

    echo "<ul>";

    foreach ($produtos as $produto) {
        echo "<li>$produto</li>";
    }

    echo "</ul>";
    ?>

</body>
</html>