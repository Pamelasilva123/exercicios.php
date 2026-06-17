
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
</head>
<body>
     
     <h2>Lista de Alunos</h2>

     <?php
     $alunos = array("Ana","Bruno","Carlos","Daniela", "Eduardo");

     foreach ($alunos as $aluno) {
        echo "<p>$aluno</p>";
     }
     ?>

</body>
</html>