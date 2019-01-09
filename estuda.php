<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Dia da Semana</title>
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
      $d = isset($_GET["ds"])?$_GET["ds"]:0;
      switch($d){
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
         echo"Levanta e vai estudar! :)";
         break;
        
         case 7:
         case 8:
          echo"Descanse pequeno gafanhoto! ;)";
          break;

          defaut:
          echo"Dia da semana invalido";
      }
    ?>
      <a href="estuda.html"> <input type="submit" value="Voltar"/>  </a>
</div>
</body>
</html>
 