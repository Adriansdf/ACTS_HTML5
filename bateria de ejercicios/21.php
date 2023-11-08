<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
</head>
    <body>

        <form action="21.php" method="post"> 

            
            
            <label for="base">Introduzca el valor de la base de un triángulo: </label>
            <input type="number" id="base" name="base"> 

            <br>

            <label for="altura">Introduzca el valor de la altura de un triángulo: </label>
            <input type="number" id="altura" name="altura"> 


            <input type="submit">

        </form>

        <?php

            $base = $_POST["base"];
            $altura = $_POST["altura"];
            

            $area =  ($base * $altura) / 2;
            
    
            
            echo "<br> Valor de la base introducida: ".$base;
            echo "<br> Valor de la altura introducida: ".$altura;
            echo "<br> El área del triángulo es de: ".$area;
            
            


        ?>

    </body>

</html>