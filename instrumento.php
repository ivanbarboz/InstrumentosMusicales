<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require_once 'conexiones/desInstrumentos.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumento Musical</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <div class="contenedor-instrumento">
        <?php if (isset($fila)) { ?>
            <p><?php echo $fila['descripcion']; ?></p>
            <img src="<?php echo $fila['image_url']; ?>" alt="Instrumento">
        <?php } else { ?>
            <p>Instrumento no encontrado</p>
        <?php } ?>
    </div>
</body>
</html>

