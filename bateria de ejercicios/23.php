<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 23</title>
</head>
    <body>

        <form action="23.php" method="post"> 

            
            
            <label for="precio">Introduzca el precio de un artículo: </label>
            <input type="number" id="precio" name="precio"> 


            <input type="submit">

        </form>

        <?php

            $precio = $_POST["precio"];

            $nuevoprecio =  ($precio * 0.90);


            echo "<br> Valor del precio introducido: ".$precio;
            echo "<br> El nuevo precio con el 10% de descuento en el artículo es: ".$nuevoprecio;
            
            


        ?>

    </body>

</html>