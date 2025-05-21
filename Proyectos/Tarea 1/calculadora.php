<?php
$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

    if ($operacion == "dividir" && $num2 == 0) {
        $resultado = "<p style='color:red;'>❌ Error: División entre cero</p>";
    } else {
        switch ($operacion) {
            case "sumar": $resultado = $num1 + $num2; break;
            case "restar": $resultado = $num1 - $num2; break;
            case "multiplicar": $resultado = $num1 * $num2; break;
            case "dividir": $resultado = $num1 / $num2; break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="css/global.css">

</head>
<body>
    <h2>Calculadora</h2>
    <form method="post">
        <input type="number" name="num1" required>
        <input type="number" name="num2" required>
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <button type="submit">Calcular</button>
    </form>
    <?php if ($resultado !== "") echo "<h3>Resultado: $resultado</h3>"; ?>

<a class="btn-volver" href="index.php">🏠 Volver al inicio</a>

</body>
</html>
