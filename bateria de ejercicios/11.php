<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
    <body>

        <form action="11.php" method="post"> 

            <label for="valor1">Introduzca una nota numérica</label>
            <input type="number" id="valor1" name="valor1"> 

            <br>
        
            <label for="valor2">Introduzca otra nota numérica</label>
            <input type="number" id="valor2" name="valor2">

            <br>
        
            <label for="valor3">Introduzca otra nota numérica</label>
            <input type="number" id="valor3" name="valor3">

            <input type="submit">

        </form>

        <?php

            $valor1 = $_POST["valor1"];
            $valor2 = $_POST["valor2"];
            $valor3 = $_POST["valor3"];

            $resultado = $valor1 + $valor2 + $valor3;
            $media = $resultado / 3;
    
            echo "<br> Resultado de la suma: ".$resultado;
            echo "<br> Media: ".$media


        ?>

    </body>

</html>