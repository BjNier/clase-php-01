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
        form {
            margin-bottom: 20px;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        .resultados {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #000;
            max-width: 400px;
        }
    </style>
</head>
<body>

    <h1>CALCULO DE LA COMPRA EN LINEA</h1>
    
    <form action="" method="POST">
        <label for="precio1">Precio del primer producto:</label>
        <input type="number" step="0.01" name="precio1" id="precio1" required>
        
        <label for="cantidad1">Cantidad del primer producto:</label>
        <input type="number" name="cantidad1" id="cantidad1" required>
        
        <label for="precio2">Precio del segundo producto:</label>
        <input type="number" step="0.01" name="precio2" id="precio2" required>
        
        <label for="cantidad2">Cantidad del segundo producto:</label>
        <input type="number" name="cantidad2" id="cantidad2" required>
        
        <label for="precio3">Precio del tercer producto:</label>
        <input type="number" step="0.01" name="precio3" id="precio3" required>
        
        <label for="cantidad3">Cantidad del tercer producto:</label>
        <input type="number" name="cantidad3" id="cantidad3" required>
        
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recibir los datos del formulario
        $precio1 = floatval($_POST['precio1']);
        $cantidad1 = intval($_POST['cantidad1']);
        $precio2 = floatval($_POST['precio2']);
        $cantidad2 = intval($_POST['cantidad2']);
        $precio3 = floatval($_POST['precio3']);
        $cantidad3 = intval($_POST['cantidad3']);

        // Cálculos
        $subtotal = ($precio1 * $cantidad1) + ($precio2 * $cantidad2) + ($precio3 * $cantidad3);
        $impuesto = $subtotal * 0.15; // 15% de impuesto
        $descuento = $subtotal * 0.10; // 10% de descuento
        $totalFinal = $subtotal + $impuesto - $descuento;

        // Mostrar resultados
        echo "<div class='resultados'>"; 
        echo "<h3>Resultados de la Compra</h3>";
        echo "<p><strong>Subtotal:</strong> $" . number_format($subtotal, 2) . "</p>";
        echo "<p><strong>Impuesto (15%):</strong> $" . number_format($impuesto, 2) . "</p>";
        echo "<p><strong>Descuento (10%):</strong> $" . number_format($descuento, 2) . "</p>";
        echo "<p><strong>Total Final:</strong> $" . number_format($totalFinal, 2) . "</p>";
        echo "</div>";
    }
    ?>

</body>
</html>
