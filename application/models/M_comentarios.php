<?php
class M_comentarios extends MY_Model  {

    public function getComentarios(){
      $query = "SELECT * FROM comentarios";
      $dts = $this->db->query($query);
      if($dts->num_rows() > 0){
        foreach ($dts->result() as $row) {
          $data[] = $row;
        }        
        return $data;
      } else {
        return FALSE;
      }
      //var_dump($data);
    }


    public function setComentarios($nombre, $apellido, $comentario) {
       
      $sql = "INSERT INTO comentarios (nombre, apellido, comentario) VALUES ('$nombre', '$apellido', '$comentario')";
      $this->db->query($sql);
      //$db -> query($query);
      //return $this->db->query($query);
      //var_dump($query);
    }
}