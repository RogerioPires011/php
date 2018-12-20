<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $valor=$_GET["v"];
    $rq = sqrt($valor);
    echo" A Raiz de $valor e igual a " . number_format($rq,3);   
    ?>
    <a href="exercicio01.html">    Voltar</a>
    
</div>
</body>
</html>
 