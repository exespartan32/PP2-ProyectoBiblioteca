<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libros extends My_Controller {

	public function __construct() {
		parent::__construct();

		
		$this->load->model('m_libros');
	}

	public function index() {
		$this->setView('libros/crud.php');
	}

	public function test(){
		echo 'hola mundo';
	}
}
