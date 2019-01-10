<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Contagem</title>
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
           $inicio = isset($_GET["nInicio"])?$_GET["nInicio"]:0;
           $final = isset($_GET["nFim"])?$_GET["nFim"]:0;
           $salto = isset($_GET["nSalto"])?$_GET["nSalto"]:0;
           if ($inicio < $final){
               while ($inicio <= $final){
                   echo $inicio."<br/>";
                   $inicio = $inicio + $salto;
               }
           }
           elseif ($inicio > $final) {
               while ($final <= $inicio){
                   echo $inicio."<br/>";
                   $inicio = $inicio - $salto;
               }
           }
    ?>
    <a href="while.html"> <input type="submit" value="Voltar"/>  </a>
</div>
</body>
</html>
 