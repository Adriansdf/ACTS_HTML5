<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
    <body>

        <form action="14.php" method="post"> 

            <label for="valor1">Introduzca X segundos para convertirlos</label>
            <input type="number" id="valor1" name="valor1"> 

            <input type="submit">

        </form>

        <?php

            $valor1 = $_POST["valor1"];

            $minutos = $valor1 / 60;
            $horas = $minutos / 60;
    
            echo "<br> Segundos introducidos: ".$valor1;
            echo "<br> Resultado en minutos: ".$minutos;
            echo "<br> Resultado en horas: ".$horas;
            


        ?>

    </body>

</html>