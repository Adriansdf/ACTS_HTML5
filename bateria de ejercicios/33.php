<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 33</title>
</head>
    <body>

        <h1>Ejercicio 33</h1>

        

        <form action="33.php" method="post"> 

            <label for="cateto1">Introduzca el cateto 1: </label>
            <input type="number" id="cateto1" name="cateto1"> 

            <br><br>

            <label for="cateto2">Introduzca el cateto 2: </label>
            <input type="number" id="cateto2" name="cateto2">  


            <input type="submit">

        </form>


        <?php

            $cateto1 = $_POST["cateto1"];
            $cateto2 = $_POST["cateto2"];


            $hipotenusa = sqrt ( ($cateto1 * $cateto1) + ($cateto2 * $cateto2) );

            echo "<br> La hipotenusa de los catetos introducidos es: ".$hipotenusa
            
            


        ?>

    </body>

    

</html>