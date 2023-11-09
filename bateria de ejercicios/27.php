<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 27</title>
</head>
    <body>

        <form action="27.php" method="post"> 

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

            $suma =  $numero1 + $numero2;
            $resta =  $numero1 - $numero2;
            $multiplicacion =  $numero1 * $numero2;
            $division =  $numero1 / $numero2;
            
    
            echo "<br> El valor de la suma es: ".$suma;
            echo "<br> El valor de la resta es: ".$resta;
            echo "<br> El valor de la multiplicacion es: ".$multiplicacion;
            echo "<br> El valor de la divsion es: ".$division;
            
            


        ?>

    </body>

</html>