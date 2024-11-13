<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?? 'Sistema de Consultas'; ?></title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <div class="container">
        <header class="main-header">
            <h1><?php echo $titulo ?? 'Sistema de Consultas'; ?></h1>
            <?php if (isset($descripcion)): ?>
                <p class="descripcion"><?php echo $descripcion; ?></p>
            <?php endif; ?>
        </header>