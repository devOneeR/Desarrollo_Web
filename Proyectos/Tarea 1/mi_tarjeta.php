    <?php
        $nombre = "Ronny";
        $apellido = "De León";
        $edad = 20;
        $carrera = "Desarrollo de Software";
        $universidad = "ITLA";

        $mensaje_edad = $edad >= 18 ? "✅ Eres mayor de edad" : "⚠️ Eres menor de edad";
    ?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi tarjeta</title>
    <link rel="stylesheet" href="css/global.css">

</head>
<body>

<div class="tarjeta-container">
        <div class="tarjeta-img">
            <img src="img/Foto 4x4 Nueva.jpg" alt="Foto Personal">
        </div>

        <div class="tarjeta-info">
            <h2><?php echo "$nombre $apellido"; ?></h2>
            <p>🎓 <strong>Carrera:</strong> <?php echo $carrera; ?></p>
            <p>🏫 <strong>Universidad:</strong> <?php echo $universidad; ?></p>
            <p>🎂 <strong>Edad:</strong> <?php echo $edad; ?> años</p>
            <p class="tarjeta-status"><?php echo $mensaje_edad; ?></p>
        </div>
    </div>

    <div style="text-align: center;">
        <a class="btn-volver" href="index.php">🏠 Volver al inicio</a>
    </div>
</body>
</html>