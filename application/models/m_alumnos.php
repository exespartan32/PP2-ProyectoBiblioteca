<?php
class m_alumnos extends MY_Model {

    public function getAlumno(){
        
        $query = "SELECT * FROM alumnos";

        return $this->db->query($query);
        
    }
	
}