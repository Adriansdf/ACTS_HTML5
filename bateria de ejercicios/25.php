<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 25</title>
</head>
    <body>

        <form action="25.php" method="post"> 

            <label for="dinero">Introduzca el valor del dinero del usuario: </label>
            <input type="number" id="dinero" name="dinero"> 


            <input type="submit">

        </form>

        <?php

            $dinero = $_POST["dinero"];

            $interes =  $dinero * 1.2;
            
    
            echo "<br> Valor del dinero introducido: ".$lado;
            echo "<br> El precio junto con el interés del 20% es de : ".$interes;
            
            


        ?>

    </body>

</html>