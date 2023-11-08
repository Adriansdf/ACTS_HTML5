<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
    <body>

        <form action="17.php" method="post"> 

            <label for="grados">Introduzca X Grados centígrados para convertirlos</label>
            <input type="number" id="grados" name="grados"> 

            <input type="submit">

        </form>

        <?php

            $grados = $_POST["grados"];

            $fahrenheit = ($grados * 1.8) + 32;
            
    
            echo "<br> Segundos introducidos: ".$valor1;
            echo "<br> Resultado en fahrenheit: ".$fahrenheit;
            
            


        ?>

    </body>

</html>