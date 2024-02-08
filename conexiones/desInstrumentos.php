<?php
require_once 'dbInstrumentos_Conexion.php';
// Obtén el valor de 'id' del parámetro GET
$id = $_GET['id'];

$dbh = DaoConexion::getConexion();
if (!$dbh) {
    echo "No hay acceso a la Base de Datos!!";
    exit;
}
$sql = "SELECT descripcion, image_url FROM Instrumentos WHERE instrumentos_id=:id";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$fila = $stmt->fetch();
// Cierre de la conexión
$dbh = null;
// Verificar si se encontraron resultados
if (!$fila) {
    echo "Instrumento no encontrado";
    exit;
}
?>
