<?php
    require_once 'dbInstrumentos_Conexion.php';
    $dbh = DaoConexion::getConexion();
    if(!$dbh){
        echo "No hay acceso a la Base de Datos!!";
        exit;
    }
    $sql = "SELECT instrumentos_id, nombre FROM Instrumentos";
    $stmt = $dbh->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_NUM);
    $stmt->execute();
    $fila = $stmt->fetchAll();
?>

