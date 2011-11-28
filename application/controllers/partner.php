<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partner extends CI_Controller {

	function __construct() { 
		parent::__construct(); 
		$this->load->model('partner_model');
	}

	function index() {

		$data['result'] = $this->partner_model->all();
		$data['content'] = 'test/index';
		$this->load->view('includes/admin/template', $data);

	}
}

?>
