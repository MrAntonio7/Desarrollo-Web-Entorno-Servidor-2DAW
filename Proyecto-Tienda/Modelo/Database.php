<?php
/**
 * 
 *  ADAPTAR A LA BBDD DE TIENDAS
 * iNTRODUCIR DATOS Y COMPROBAR FUNCIONAMIENTO
 * CONTROLADOR ++?
 **/
class Database
{
    const USERNAME = "dwes";
    const PASSWORD = "abc123.";
    const HOST = "localhost";
    const DB = "dbtiendas";
    private function getConnection()
    {
        $username = self::USERNAME;
        $password = self::PASSWORD;
        $host = self::HOST;
        $db = self::DB;
        $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    }
    public function queryList($sql, $args = null)
    {
        $connection = $this->getConnection();
        $stmt = $connection->prepare($sql);
        if (!empty($args))
            $stmt->execute($args);
        else
            $stmt->execute();
        return $stmt;
    }
    static function closeConnection(&$connection) {
        $connection=null;
    }
}