<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Contador</title>
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
    <?php //Mostrar uma uma contagem progressiva de 1 ate 10
    $c = 10;
    while ($c >= 1) {
       echo $c . "<br/>";
       $c--;
    }
     
    ?>
</div>
</body>
</html>
 