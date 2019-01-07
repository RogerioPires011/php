<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Formularios Html+PHP</title>
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
    $valor=$_GET["v"];
    $rzq=sqrt($valor);
    echo"A raiz de $valor é " . number_format($rzq,2);
?>
<a href="formulario.html"> <input type="submit" value="Voltar"/>  </a>
</div>
</body>
</html>
 