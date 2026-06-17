<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Soma dos Numeros</title>
</head>
<body>
      
    <h2>Soma dos Numeros do Array</h2>

    <?php
    $numeros = array(10,20,30,40,50);

    $soma = 0;

    foreach ($numeros as $numero) 
        {
        $soma += $numero;
    }

    echo "<p>A soma de todos os números é: $soma</p>";
    ?>

</body>
</html>
