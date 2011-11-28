<?php

class Test extends CI_Controller {
	
	public function index() {
		$data['content'] = 'test/index';
		$this->load->view('includes/admin/template', $data);
	}

}


?>
