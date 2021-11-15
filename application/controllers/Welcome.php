<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {
	
	public function index() {
		$this->load->view('admin/admin.php');
	}
}
