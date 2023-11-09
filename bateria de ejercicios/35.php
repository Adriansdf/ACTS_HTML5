<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 35</title>
</head>
    <body>

        <h1>Ejercicio 35</h1>

        <form action="35.php" method="post"> 

    

            <label for="nota1">Introduzca la nota 1: </label>
            <input type="number" id="nota1" name="nota1"> 

            <br><br>

            <label for="nota2">Introduzca la nota 2: </label>
            <input type="number" id="nota2" name="nota2"> 

            <br><br>

            <label for="nota3">Introduzca la nota 3: </label>
            <input type="number" id="nota3" name="nota3">


            <input type="submit">

        </form>

        <?php

            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $nota3 = $_POST["nota3"];

            $media = ($nota1 * 0.20) + ($nota2 * 0.50) + ($nota3 * 0.3);

            echo "<br> La nota final del alumno es un: ".$media
            
    

        ?>

    </body>
