<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Switch</title>
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
    $n=isset($_GET["num"])?$_GET["num"]:0;
    $o=isset($_GET["oper"])?$_GET["oper"]:1;

    switch($o){

     case 1:
     $r = $n * 2;
     break;
     
     case 2:
     $r = $n ^ 3;
     break;
     
     case 3:
     $r = sqrt($n);
      
    }

    echo" O resultado da operação solicitada foi  ". number_format($r,2);


    ?>
     <a href="switch.html"> <input type="submit" value="Voltar"/>  </a>
</div>
</body>
</html>
 