<?php
 
class Estudiante {
    
    private $estudiante;
    private $db;
 
    public function __construct() {
        $this->estudiante = array();
        $this->db = new PDO('mysql:host=localhost;dbname=instituto', "root", "");
    }
 
    private function setNames() {
		return $this->db->query("SET NAMES 'utf8'");
    }
 
    public function getEstudiante() {
 
        self::setNames();
        $sql = "SELECT nombre, apellidos, email, telefono, tutor, grupo, fecha_de_inicio, id_estudiante FROM estudiante";
        foreach ($this->db->query($sql) as $res) {
            $this->estudiante[] = $res;
        }
        return $this->estudiante;
        $this->db = null;
    }
 
    public function setEstudiante($nombre, $apellidos, $email, $telefono, $tutor, $grupo, $fecha_de_inicio) {
 
        self::setNames();
        $sql = "INSERT INTO estudiante (nombre, apellidos, email, telefono, tutor, grupo, fecha_de_inicio) VALUES ('" . $nombre . "', '" . $apellidos . "', '" . $email . "', '" . $telefono . "', '" . $tutor . "', '" . $grupo . "', '" . $fecha_de_inicio . "')";
        $result = $this->db->query($sql);
 
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>
