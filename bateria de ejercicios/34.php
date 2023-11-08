<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 34</title>
</head>
    <body>

        <h1>Ejercicio 34</h1>

        <form action="34.php" method="post"> 

    

            <label for="kilometro">Introduzca un nº en km para pasarlos a m/s </label>
            <input type="number" id="kilometro" name="kilometro"> 


            <input type="submit">

        </form>

        <?php

            $kilometro = $_POST["kilometro"];

            $velocidad = $kilometro * (1000 / 3600);

            echo "<br> La velocidad en m/s es: ".$velocidad
            
    

        ?>

    </body>











































































































