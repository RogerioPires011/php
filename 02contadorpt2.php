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
   $i = 1;
   while ($i <= 5) {
      $v = "num" . $i;
      $url = "v" . $i;
      $$v = isset($_GET[$url])?$_GET[$url] : 0;
      $i++;
   }
   $i = 1;
   while ($i <= 5) {
      $v = "num" . $i;
      echo "Valor $i : " . $$v . "<br/>";
      $i++;
   }
    ?>
</div>
</body>
</html>
 