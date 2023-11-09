<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
    <body>

        <h1>Programa para saludar</h1>

        <form action="16.php" method="post"> 

            <label for="valor1">Introduzca un nombre para saludarle: </label>
            <input type="text" id="valor1" name="valor1"> 

            <input type="submit">

        </form>

        <?php

            $valor1 = $_POST["valor1"];
    
            echo "<br> Hola! , ".$valor1;
            
            


        ?>

    </body>

</html>