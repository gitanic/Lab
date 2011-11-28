<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() { 
		parent::__construct(); 
		$this->load->model('users_model','',TRUE);
	}

	function index() {
		$data['users'] = $this->users_model->findAll();
		$data['content'] = 'users/index.php';
		$this->load->view('includes/admin/template', $data);
	}
}

?>

