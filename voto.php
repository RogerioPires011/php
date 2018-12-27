<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>voto</title>
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
    <?php /*O PROGRAMA IRA RECEBER DADOS DO USUARIO E DIZER SE É OBRIGADO OU NAO A VOTAR*/

    $ano = $_GET ["an"];
    $idade = 2018-$ano;
    echo"Quem nasceu em $ano tem $idade de idade<br/>";
    $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";//NESSA LINHA ESTOU UTILIZANDO A OPERAÇÃO LOGICA 'E' PARA ACHAR O INTERVALO
    echo"E dessa forma seu voto e $tipo";
    ?>
</div>
</body>
</html>
 