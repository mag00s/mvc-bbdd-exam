<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error - Sistema de Consultas</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <div class="container">
        <div class="error-container">
            <h1>Error</h1>
            <div class="error-message">
                <?php echo $error ?? 'Ha ocurrido un error inesperado'; ?>
            </div>
            <div class="back-link">
                <a href="index.php">Volver al inicio</a>
            </div>
        </div>
    </div>
</body>
</html>