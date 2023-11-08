<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
    <body>

    <form action="5.php" method="post"> 

        <label for="valor1">Introduzca un número</label>
        <input type="text" id="valor1" name="valor1"> 
      <br>
        <label for="valor2">Introduzca otro número</label>
        <input type="text" id="valor2" name="valor2">

        <input type="submit">

    </form>

    <?php

        $valor1 = $_POST ["valor1"];
        $valor2 = $_POST ["valor2"];

        $suma = $valor1 + $valor2;

        echo "<br>".$suma
    

    ?>





        
    </body>
</html>