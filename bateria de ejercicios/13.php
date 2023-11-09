<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
    <body>

        <form action="13.php" method="post"> 

            <label for="valor1">Introduzca un numero</label>
            <input type="number" id="valor1" name="valor1"> 

            <br>
        
            <label for="valor2">Introduzca otro numero</label>
            <input type="number" id="valor2" name="valor2">

            <input type="submit">

        </form>

        <?php

            $valor1 = $_POST["valor1"];
            $valor2 = $_POST["valor2"];
            

            $resultado = $valor1 + $valor2;
            
    
            echo "<br> Resultado: ".$resultado;
            


        ?>

    </body>

</html>