<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 30</title>
</head>
    <body>

        <h1> pago según horas trabajadas </h1>

        <form action="30.php" method="post"> 

            <label for="salario">Introduzca el salario del trabajador: </label>
            <input type="text" id="salario" name="salario">
            
            <br><br>

            <label for="horas">Introduzca las horas trabajadas: </label>
            <input type="number" id="horas" name="horas"> 


            <input type="submit">

        </form>

        <?php

            $salario = $_POST["salario"];
            $horas = $_POST["horas"];
            $horas_extras = $horas - 40;
    
            if ($horas > "40") {
                
                $total = (40 * $salario) + ($horas_extras * ($salario * 1.5));
                
                echo "<br> El total que cobrará es: ".$total;
            } 
            
            else {
                echo "<br> Habrá cobrado de normal: ".($salario * $horas);
            }
            
            


        ?>

    </body>

    

</html>