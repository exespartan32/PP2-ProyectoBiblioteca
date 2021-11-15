<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends My_Controller {

	public function __construct() {
		parent::__construct();		
	}



	public function getAlumno(){
		$this->load->model('m_alumnos');

		$db['alumnoNombre'] = $this->m_alumnos->getAlumnoNombre();

		//$this->load->view('alumnos/alumno.php', $db);
		$this->setView('alumnos/alumno.php', $db);
	}


	public function verTabla(){
		$this->setView('alumnos/table');
	}
}
