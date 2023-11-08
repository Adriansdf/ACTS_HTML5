<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 22</title>
</head>
    <body>

        <form action="22.php" method="post"> 

            
            
            <label for="radio">Introduzca el valor de un radio para un círculo: </label>
            <input type="number" id="radio" name="radio"> 


            <input type="submit">

        </form>

        <?php

            $radio = $_POST["radio"];


            $longitud =  (2 * 3.14 * $radio);
            $area =  (3.14 * ($radio * $radio));
            

            echo "<br> Valor del radio introducid: ".$radio;
            echo "<br> La longitud dl círculo es de: ".$longitud;
            echo "<br> El área del círculo es de: ".$area;
            
            


        ?>

    </body>

</html>