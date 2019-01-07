<!DOCTYPE html>
<html>
<head>
    <?php
    $txt=isset($_GET["t"])?$_GET["t"]:"Texto Generico";
    $tam=isset($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor=isset($_GET["cor"])?$_GET["cor"]:"#000000";
    
    
    ?>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Cores</title>
    <style>

        span.texto{
            font-size:<?php echo $tam;?>;
            color:<?php echo $cor;?>;
        }
        h2 {
            font: 16pt Arial;
            color: #8B0000;
            font-weight: bold;
        }

        body {
            background-color: #1C1C1C;
        }
        
    </style>
</head>
<body>
<div>
    <?php
      echo"<span class='texto'> $txt</span> ";
    ?>
    <a href="cores.html"> <input type="submit" value="Voltar"/>  </a>
</div>
</body>
</html>
 