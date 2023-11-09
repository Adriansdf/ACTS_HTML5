<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 28</title>
</head>
    <body>

        <form action="28.php" method="post"> 

            <label for="numero1">Introduzca un nº: </label>
            <input type="number" id="numero1" name="numero1"> 

            <br><br>

            <label for="numero2">Introduzca otro nº: </label>
            <input type="number" id="numero2" name="numero2"> 


            <input type="submit">

        </form>

        <?php

            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
        
            
            
            $intercambio = $numero1; //si c = a

            $numero1 = $numero2; // a = b

            $numero2 = $intercambio; //por tanto, b = c




            echo "<br> Valores finales del número 1 = " .$numero1;
            echo "<br> Valores finales del número 2 = " .$numero2;




        ?>

    </body>

</html>