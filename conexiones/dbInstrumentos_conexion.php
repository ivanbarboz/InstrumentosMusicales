<?php
    // Clase para obtener una conexion
    class DaoConexion{
        // Variable privada donde se almacene la conexion
        private static $cnn = null;

        // Metodo que devuelve una conexion
        public static function getConexion(){
            // Intentar conectar a una DB
            try {
                $db = 'tarea03'; // nombre de la DB
                $dsn = "mysql:host=localhost;dbname=$db"; // cadena conexion
                $usuario = 'root';
                $password = 1234; 
                // Tipo de control de errores
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

                // Crear el objeto de conexion
                $cnn = new PDO($dsn, $usuario, $password, $pdo_options);

            } catch (Exception $e) {
                exit('Error de conexion: '.$e->getMessage());
            }
            return $cnn;
        }
    }
?>