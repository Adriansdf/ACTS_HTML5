<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 31</title>
</head>
    <body>

        <h1>Ejercicio 31 - Tabla multiplicar</h1>

        <form action="31.php" method="post"> 

    

            <label for="numero">Introduzca un nº para que realice su tabla de multiplicar: </label>
            <input type="number" id="numero" name="numero"> 


            <input type="submit">

        </form>

        <?php

            $numero = $_POST["numero"];
            
    
            for ($i = 0; $i <= 10; $i++) {

                $resultado = $numero * $i;
                
                echo "<br> $numero X $i = ".$resultado;
            }
            
            


        ?>

    </body>

    

</html>