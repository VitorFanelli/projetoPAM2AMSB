<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="operadores.php" method="POST">
        Primeiro Valor<input type="text" name="txt_valor1"><br><br>
        Segundo Valor<input type="text" name="txt_valor2"><br><br>
        <input type="submit" >
    </form>  

    <?php

           $valor1=$_POST["txt_valor1"];
           $valor2=$_POST["txt_valor2"];
            

    ?>

    
</body>
</html>