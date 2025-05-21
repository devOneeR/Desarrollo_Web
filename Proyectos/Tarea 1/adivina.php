<?php
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["numero"];
    $secreto = rand(1, 5);
    if ($usuario == $secreto) {
        $mensaje = "<p style='color:green;'>¡Wow, adivinaste!</p>";
    } else {
        $mensaje = "<p style='color:orange;'>¡Sigue intentando! El número correcto era $secreto</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivina mi número</title>
    <link rel="stylesheet" href="css/global.css">

</head>
<body>
    <h2>Adivina un número del 1 al 5</h2>
    <form method="post">
        <input type="number" name="numero" min="1" max="5" required>
        <button type="submit">Probar</button>
    </form>
    <?= $mensaje ?>

    <a class="btn-volver" href="index.php">🏠 Volver al inicio</a>

</body>
</html>
