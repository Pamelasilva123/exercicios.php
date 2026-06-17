<!DOCTYPE html>
<html>
<header>
    <meta charset="UTF-8">
    <title>Números Pares</title>
</heade>
<body>

    <h2>Números pares de 0 até 20<h2>
    
    <?php
    for ($i = 0; $i <=20; $i++) {
        if ($i % 2 == 0) {
            echo "<p>$i</p>";
        }

    }
    ?>

    
