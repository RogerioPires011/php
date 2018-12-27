<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Média do Aluno</title>
    <style>
       h2{
             font: 16pt Arial;
             color: #8B0000;
             font-weight: bold;
 }
 body{
     background-color:#1C1C1C;
 }
</style>
</head>
<body>
<div>
    <?php

    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1 + $nota2)/2;
    
    echo"A media de $nota1 e $nota2 e $m <br/>";
   
    $sit=($m<6)?"REPROVADO":"APROVADO";

    echo"A situação do aluno e $sit";

    ?>
</div>
</body>
</html>
 