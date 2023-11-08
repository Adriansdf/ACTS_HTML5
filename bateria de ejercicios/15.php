<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
    <body>

        <form action="15.php" method="post"> 

            <label for="valor1">Introduzca X kilobytes para convertirlos</label>
            <input type="number" id="valor1" name="valor1"> 

            <input type="submit">

        </form>

        <?php

            $valor1 = $_POST["valor1"];

            $megabytes = $valor1 / 1024;
            $terabytes = $megabytes / 1024;
    
            echo "<br> Segundos introducidos: ".$valor1;
            echo "<br> Resultado en megabytes: ".$megabytes;
            echo "<br> Resultado en terabytes: ".$terabytes;
            


        ?>

    </body>

</html>