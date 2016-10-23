<?php 

require_once '../DataBase/Database.php';

class Zapateria
{
    function __construct()
    {
    }

    public static function getCategoria()
    {
        $consulta = "SELECT * from categoria";
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();

            return $comando->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return false;
        }
    }
    
    public static function getMarca()
    {
        $consulta = "SELECT * from marca";
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();

            return $comando->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return false;
        }
    }
     public static function RegMarca($descripcion)
    {
        try {
                       
            $comando = "INSERT INTO marca (marca_id,nombre,estado) 
            VALUES('','$descripcion','1')";
            // Preparar la sentencia
            $cmd = Database::getInstance()->getDb()->prepare($comando);

            // Relacionar y ejecutar la sentencia
            $cmd->execute();

            return $cmd;
            
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>

