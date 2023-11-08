<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
    <body>

        <form action="18.php" method="post"> 

            <label for="horas">Introduzca las horas trabajadas de una persona: </label>
            <input type="number" id="horas" name="horas"> 

            <br>

            <label for="sueldo">Introduce el sueldo por hora de una persona: </label>
            <input type="number" id="sueldo" name="sueldo"> 

            <input type="submit">

        </form>

        <?php

            $horas = $_POST["horas"];
            $sueldo = $_POST["sueldo"];

            $salario =  $horas * $sueldo;
            
    
            echo "<br> Horas introducidas: ".$horas;
            echo "<br> Sueldo introducido: ".$sueldo;
            echo "<br> El salario de esta persona es de: ".$salario;
            
            


        ?>

    </body>

</html>