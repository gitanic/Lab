<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()  {
		parent::__construct();
		$this->load->model('users_model','',TRUE);
	}

	function index() {
		$this->load->helper('form');
		$this->load->view('login/index');
	}
	
	function check() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'User', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('login/index');
		} else {
			redirect('/admin/index', 'refresh');
		}

	}

	function check_database($password) {
		$username = $this->input->post('username');
		$result = $this->users_model->login($username, $password);

		if($result) {
			$sess_array = array();
			foreach($result as $row) {
				$sess_array = array('id' => $row->id,'username' => $row->username);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		} else {
			$this->form_validation->set_message('check_database', 'Usuario ou senha invalida.');
			return false;
		}
	}


}
?>
