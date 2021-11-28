<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios extends My_Controller {
    public function __construct() {
        parent::__construct();  
        $this->load->model('M_comentarios');
        $this->load->helper('form');
    }


    public function abrirFormulario(){
       $this->load->view('Comentarios/comentarios.php');
    }

    public function recibirEnviarDatos(){
        if (isset($_POST['nombre'])&&isset($_POST['apellido'])&&isset($_POST['comentario'])){
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $comentario = $this->input->post('comentario');

            $this->M_comentarios->setComentarios($nombre, $apellido, $comentario);
            $this->setView('Comentarios/datosGuardados.php');    
        }
    }

    public function verDatos(){
        echo "los datos almacenads en la base de datos son: ";
        $db['comentarios']=$this->M_comentarios->getComentarios();        
        var_dump($db);
    }

    public function verTabla(){ 
        $db['comentarios']=$this->M_comentarios->getComentarios(); 
        //$this->load->view('comentarios/tabla.php', $db);
        $this->setView('comentarios/tabla.php', $db);
    }

    public function eliminar($id){
        $comentarios = $this->M_comentarios->getDataComentario($id);
        if($comentarios->num_rows() > 0){
            foreach ($comentarios->result() as $row) {
              $data[] = $row;
            }
            $db['comentarios']=  $data;  
            $this->load->view('comentarios/eliminarDato.php', $db);
          }
        $comentarios = $this->M_comentarios->deleteComentario($id);
    }

    public function enviarEliminacion(){
        $id = $this->input->post('id_comentario');
        $this->M_comentarios->deleteComentario($id);
        $this->setView('Comentarios/datoBorrado.php');
    }

    public function editar($id){
        $comentarios = $this->M_comentarios->getDataComentario($id);
        if($comentarios->num_rows() > 0){
            foreach ($comentarios->result() as $row) {
              $data[] = $row;
            }
            $db['comentarios']=  $data;  
            $this->load->view('comentarios/actualizarDato.php', $db);
          } 
    }

    public function enviarEdicion(){
        if (isset($_POST['id_comentario'])&&isset($_POST['nombre'])&&isset($_POST['apellido'])&&isset($_POST['comentario'])){
            $id = $this->input->post('id_comentario');
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $comentario = $this->input->post('comentario');

            $this->M_comentarios->updateComentarios($id, $nombre, $apellido, $comentario);
            $this->setView('Comentarios/datosGuardados.php'); 
        }
    }
}