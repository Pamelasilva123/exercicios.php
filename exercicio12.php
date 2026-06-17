<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Cores</title>
</head>
<body>

    <h2>Lista de Cores</h2>

    <?php
    $cores = array("Azul","Vermelho","verde","Amarelo","Preto");

    foreach ($cores as $cor) {
        echo "<p>" . $cor . "</p>";
    }
    ?>
    