<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>ANO DE NASCIMENTO</title>
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
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a;
    echo"Você nasceu em $a e terá $i anos.";
    if($i < 16){
    $tipoVoto="não vota";
    }
    elseif(($i>=16 && $i <18)||($i>65)){
    $tipoVoto="Voto Opcional";
    }
    else{
        $tipoVoto="Voto Obrigatório";
    }

    
    echo" Para essa idade, $tipoVoto";

    ?>
    <a href="anasc2.html"> <input type="submit" value="Voltar"/>  </a>
</div>
</body>
</html>