<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Programa igual identico</title>
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
    <?php //IGUAL IDENTICO
    /*NESSE PROGRAMA IREI APENAS COMPARAR SE AS VARIAVEIS SAO IGUAIS OU NAO */
    $a = "3";
    $b = "3";
    $r= ($a === $b) ? "SIM" : "NAO";
    
    echo"As variaveis A e B sao iguais? $r";
    
    echo"<br/>As variaveis A e B sao identicas? $r";
    ?>
</div>
</body>
</html>
 