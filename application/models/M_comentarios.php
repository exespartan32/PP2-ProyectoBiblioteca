<?php
class M_comentarios extends MY_Model  {

    public function getComentarios(){
      $query = "SELECT * FROM comentarios WHERE estado = 1";
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
      $status = 0;
      $sql = "INSERT INTO comentarios (nombre, apellido, comentario, estado) VALUES ('$nombre', '$apellido', '$comentario', '$status');";
      $this->db->query($sql);
    }

    public function updateComentarios($id, $nombre, $apellido, $comentario){
      $sql = "UPDATE comentarios SET nombre = '$nombre',apellido = '$apellido', comentario='$comentario' WHERE id_comentario = '$id';";
      $this->db->query($sql);     
    }

    public function getDataComentario($id){
      $sql = " SELECT * FROM comentarios WHERE id_comentario=".$id;
      return $this->db->query($sql);
    }

    public function deleteComentario($id){
      $sql = "UPDATE comentarios SET estado = 0 WHERE id_comentario=".$id;
      $this->db->query($sql);
    }
}