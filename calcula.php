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
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $m = ($n1+$n2)/2;
    
    echo"a media entre <b><font color='#FF0000'> $n1</font></b>  e <b><font color='#FF0000'> $n2 </font></b> é <b><font color='#FF0000'> $m </font></b><br/>";
    
    if($m>=7){
        $a=" Aprovado";  
    } 
    else{
        $a=" Reprovado";
    }
    echo " A situação do aluno é: <b><font color='#FF0000'> $a </font></b><br/>"
    ?>

   <a href="Calcular.html"> <input type="submit" value="Voltar"/>  </a>
</div>
</body>
</html>
 