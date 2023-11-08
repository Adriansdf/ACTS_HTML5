<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 26</title>
</head>
    <body>

        <form action="26.php" method="post"> 

            
            
            <label for="sueldo1">Introduzca el sueldo del empleado 1: </label>
            <input type="number" id="sueldo1" name="sueldo1">
            
            <br>

            <label for="sueldo2">Introduzca el sueldo del empleado 2: </label>
            <input type="number" id="sueldo2" name="sueldo2">
            
            <br>

            <label for="sueldo3">Introduzca el sueldo del empleado 3: </label>
            <input type="number" id="sueldo3" name="sueldo3">


            <input type="submit">

        </form>

        <?php

            $sueldo1 = $_POST["sueldo1"];
            $sueldo2 = $_POST["sueldo2"];
            $sueldo3 = $_POST["sueldo3"];
            

            $incremento_trabajador_1 = $sueldo1 * 1.13;
            $incremento_trabajador_2 = $sueldo1 * 1.26;
            $incremento_trabajador_3 = $sueldo1 * 1.39;


            echo "<br> Sueldo del trabajador 1 introducido: ".$sueldo1;
            echo "<br> Sueldo del trabajador 2 introducido: ".$sueldo2;
            echo "<br> Sueldo del trabajador 3 introducido: ".$sueldo3;
            
            echo "<br>";

            echo "<br> Nuevo sueldo con incremento del 13% del trabajador 1: ".$incremento_trabajador_1;
            echo "<br> Nuevo sueldo con incremento del 26% del trabajador 2: ".$incremento_trabajador_2;
            echo "<br> Nuevo sueldo con incremento del 39% del trabajador 3: ".$incremento_trabajador_3;


        ?>

    </body>

</html>