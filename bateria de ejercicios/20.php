<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20</title>
</head>
    <body>

        <form action="20.php" method="post"> 

            <label for="lado">Introduzca el valor del lado de un rectángulo: </label>
            <input type="number" id="lado" name="lado"> 

            <br>
            
            <label for="base">Introduzca el valor de la base de un rectángulo: </label>
            <input type="number" id="base" name="base"> 


            <input type="submit">

        </form>

        <?php

            $lado = $_POST["lado"];
            $base = $_POST["base"];

            $area =  $lado * $base;
            
    
            echo "<br> Valor del lado introducido: ".$lado;
            echo "<br> Valor de la base introducida: ".$base;
            echo "<br> El área del rectángulo es de: ".$area;
            
            


        ?>

    </body>

</html>