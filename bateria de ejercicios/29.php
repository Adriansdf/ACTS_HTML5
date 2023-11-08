<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 29</title>
</head>
    <body>

        <h1>Ejercicio 29</h1>

        <form action="29.php" method="post"> 

            <label for="mes">Introduzca el nombre de un mes: </label>
            <input type="text" id="mes" name="mes">
            
            <br><br>

            <label for="precio">Introduzca un nº: </label>
            <input type="number" id="precio" name="precio"> 


            <input type="submit">

        </form>

        <?php

            $mes = $_POST["mes"];
            $precio = $_POST["precio"];
    
            if ($mes == "octubre") {
                
                $total = $precio * 0.85;
                
                echo "<br> El total del precio junto con el descuento del mes de Octubre es de: ".$total;
            } 
            
            else {
                echo "<br> El precio normal es: ".$precio;
            }
            
            


        ?>

    </body>

    <!--ESTE NOO SE HACÍA ;) -->

</html>