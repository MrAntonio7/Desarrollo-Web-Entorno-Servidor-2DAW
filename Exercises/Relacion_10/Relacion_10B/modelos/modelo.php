<?php
 
class Comentario {
    
    private $comentario;
    private $db;
 
    public function __construct() {
        $this->comentario = array();
        $this->db = new PDO('mysql:host=localhost;dbname=instituto', "root", "");
    }
 
    private function setNames() {
		return $this->db->query("SET NAMES 'utf8'");
    }
 
    public function getComentario() {
 
        self::setNames();
        $sql = "SELECT nombre, email, comentario FROM comentario";
        foreach ($this->db->query($sql) as $res) {
            $this->comentario[] = $res;
        }
        return $this->comentario;
        $this->db = null;
    }
 
    public function setComentario($nombre, $email, $comentario) {
 
        self::setNames();
        $sql = "INSERT INTO comentario (nombre, email, comentario) VALUES ('" . $nombre . "', '" . $email . "', '" . $comentario . "')";
        $result = $this->db->query($sql);
 
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>
