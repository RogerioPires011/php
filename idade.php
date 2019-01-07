<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Idade</title>
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
    $nome = $_GET["nome"];
    $ano = $_GET["ano"];
    $sexo = $_GET["sexo"];
    $idade = date("Y") - $ano;
    
    echo"$nome e $sexo e tem $idade anos.";

    ?>
    <a href="idade.html"><input type="submit" value="Voltar" /></a>
</div>
</body>
</html>
 