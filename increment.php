<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Incremento</title>
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
    <!--
         Operadores de Incremento
        Pré-Incremento ++$a
        Pós-incremento $a++
        Pré-Decremento --$a
        Pós-Decremento $a++
    -->
    <?php
    /* Eexercio pretende demonstrar o uso de operadores de incremento e decremento
    */
    $atual = $_GET["aa"]; // ESSA LINHA  VAI PEGAR O ANO ATUAL DA URL
    echo"O ano atual e $atual e o ano anterior e ". --$atual;// NESSA LINHA IREI UTILIZAR O PRÉ-DECREMENTO PARA MOSTRAR O ANO ANTERIOR

    ?>
</div>
</body>
</html>
