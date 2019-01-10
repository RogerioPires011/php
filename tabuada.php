<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Tabuada</title>
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

    $numero = isset($_GET["num"]) ? $_GET["num"] : 1;

    echo "Tabuada de $numero </br>";

    $cont = 1;
    $mult = 1;

    do {

        $mult = $numero * $cont;

        echo "$numero X $cont = <b>" . $mult . "</br>";

        $cont++;

    } while ($cont <= 10);

    ?>
     <a href="tabuada1.php"> <input type="submit" value="Voltar"/>  </a>
</div>
</body>
</html>
 