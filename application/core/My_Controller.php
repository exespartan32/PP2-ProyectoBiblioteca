<?php
class MY_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function setView($view, $db = null){
		$this->load->view('admin/menu.php', $db);
		$this->load->view($view);
		$this->load->view('admin/footer.php');
	}
}
