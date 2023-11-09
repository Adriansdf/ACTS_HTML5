<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
</head>
    <body>

        <form action="24.php" method="post"> 

            
            
            <label for="alumnos">Introduzca el nº de alumnos en tu clase: </label>
            <input type="number" id="alumnos" name="alumnos">
            
            <br>

            <label for="alumnas">Introduzca el nº de alumnas en tu clase: </label>
            <input type="number" id="alumnas" name="alumnas"> 


            <input type="submit">

        </form>

        <?php

            $alumnos = $_POST["alumnos"];
            $alumnas = $_POST["alumnas"];

            $total =  $alumnos + $alumnas;

            $porcentaje_alumnos = ($alumnos / $total) * 100;
            $porcentaje_alumnas = ($alumnas / $total) * 100;


            echo "<br> Nº alumnos introducido: ".$alumnos;
            echo "<br> Nº alumnas introducido: ".$alumnas;

            echo "<br>";

            echo "<br> El porcentaje de alumnos en la clase es del: ".$porcentaje_alumnos;
            echo "<br> El porcentaje de alumnas en la clase es del: ".$porcentaje_alumnas;

            
            


        ?>

    </body>

</html>