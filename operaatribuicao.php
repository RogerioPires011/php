<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
<title>Operadores de Atribuição</title>

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
    $preco = $_GET["p"];
    echo "O valor do produto e R$ ". number_format($preco,2);
    $preco  -= ($preco * 10 / 100);
    echo "<br/> O valor reajustado com 10% sera de  R$ ".number_format($preco,2);

    ?>
</div>
</body>
</html>
 