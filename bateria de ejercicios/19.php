<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
    <body>

        <form action="19.php" method="post"> 

            <label for="lado">Introduzca el valor del lado de un cuadrado: </label>
            <input type="number" id="lado" name="lado"> 


            <input type="submit">

        </form>

        <?php

            $lado = $_POST["lado"];

            $area =  $lado * $lado;
            
    
            echo "<br> Valor del lado introducido: ".$lado;
            echo "<br> El área del cuadrado es de: ".$area;
            
            


        ?>

    </body>

</html>