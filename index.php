<?php
    require_once 'conexiones/listaInstrumentos.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumentos Musicales</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/index.js"></script>
</head>
<body>
    <h1>Instrumentos Musicales</h1>
    <div class="contenedor">
        <div class="contenedor-botones">
            <?php foreach($fila as $f){ ?>
                <button class="boton-instrumento" data-id="<?php echo $f[0]; ?>"><?php echo $f[1]; ?></button>
            <?php } ?>
        </div>
        <div class="contenedor-descripcion"></div>
    </div>
</body>
</html>
