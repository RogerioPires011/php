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
    echo"Voce nasceu em $a e terá $i anos";
    if($i>=18){
    $v="voce ja pode votar";
    $d="voce ja pode dirigir";
    }
    else{
    $v="nao pode votar";
    $d="nao pode dirigir";
    }
    echo" com essa idade $v e tambem $d";
    ?>
    <a href="anasc.html"> <input type="submit" value="Voltar"/>  </a>
</div>
</body>
</html>