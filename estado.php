<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
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
        $est = isset($_GET ["est"])?$_GET ["est"]:0;
            switch ($est) {
                case "sul":
                    $reg = "Região Sul";
                    break;
                case "sud":
                    $reg = "Região Sudeste";
                    break;
                case "ne":
                    $reg = "Região Nordeste";
                    break;
                case "no":
                    $reg = "Região Norte";
                    break;
                case "co":
                    $reg = "Região Centro-Oeste";
           }
    echo "Você está na <span class='foco'>$reg</span>";
    ?>
     <a href="estado.html"> <input type="submit" value="Voltar"/>  </a>
</div>
</body>
</html>
 