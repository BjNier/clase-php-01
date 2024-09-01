<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundo Ejercicio Script</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

    </style>
</head>
<body>

    <h1>CALCULO DE COMPRA DE UNA CONSOLA PS5 CON 4 VIDEOJUEGOS Y 2 MANDOS ADICIONALES EN UNA PAGINA</h1> <br><br>
    
        <?php

        //Variables
            $Price_Console = 3600;
            $Amount_Console = 1;
            $Price_VideoGamges = 209;
            $Amount_VideoGames = 4;
            $Price_ControlsPS5 = 350;
            $Amount_ControlsPS5 = 2;


        //Cálculos
            $Subtotal = ($Price_Console * $Amount_Console) + ($Price_VideoGamges * $Amount_VideoGames) + ($Price_ControlsPS5* $Amount_ControlsPS5);
            $Impuesto = $Subtotal * 0.15; 
            $Descuento = $Subtotal * 0.10; 
            $TotalFinal = ($Subtotal + $Impuesto) - $Descuento;
        ?>

        <p> El Sub total de la compra es S/
            <strong><?php echo $Subtotal; ?>.00</strong>
        </p> <br><br>

        <p> El Monto de Impuestos es S/
            <strong><?php echo $Impuesto; ?>.00</strong>
        </p> <br><br>

        <p> El Descuento aplicado es de S/
            <strong><?php echo $Descuento; ?>.00</strong>
        </p> <br><br>

        <p> El Monto Final de la compra es S/
            <strong><?php echo $TotalFinal; ?>.00</strong>
        </p> <br><br>
</body>
</html>
