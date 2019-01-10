<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Tabuada</title>
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
        <p>Escolha um número para fazer a TABUADA</p>
   
        <form method="get" action="tabuada.php">
        
        <label for="itam"> Número: </label>
       
        <select name='num' id='itam'>
        
        <?php

        $cont = 1;

        while ($cont <= 10) {

            echo "<option value='$cont' > $cont </option> <br/>";

            $cont++;
        }


        ?>
        
        </select>
        <button class="button" style="vertical-align:middle" > <span>Mostrar</span></button>
          
    </form>

</div>
</body>
</html>