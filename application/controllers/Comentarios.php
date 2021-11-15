<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios extends My_Controller {
    public function __construct() {
        parent::__construct();  
        $this->load->model('M_comentarios');
        $this->load->helper('form');
    }


    public function formComents(){
       $this->load->view('Comentarios/comentarios.php');

    }

    public function receiveAndSendData(){
       
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $comentario = $this->input->post('comentario');

        $this->M_comentarios->setComentarios($nombre, $apellido, $comentario);

        $this->setView('Comentarios/datosGuardados.php');        
    }

    public function showData(){
        echo "los datos almacenads en la base de datos son: ";
        $db['comentarios']=$this->M_comentarios->getComentarios();        
        var_dump($db);
    }

    public function seeTable(){ 
        $db['comentarios']=$this->M_comentarios->getComentarios(); 
        $this->load->view('comentarios/table.php', $db);
    }
}