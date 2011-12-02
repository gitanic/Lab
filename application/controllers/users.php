<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() { 
		parent::__construct();
 		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('users_model','',TRUE);
	}

	function index() {
		$data['users'] = $this->users_model->find();
		$data['content'] = '/users/index';
		$this->load->view('includes/admin/template', $data);
	}

	function create() {
		$data['content'] = '/users/create';
		$this->load->view('includes/admin/template', $data);
	}

	function save() {
		$data[] = array();
		$data['id'] = $this->input->post('id', TRUE);
		$data['username'] = $this->input->post('username', TRUE);
		$data['password'] = $this->input->post('password', TRUE);
		$this->users_model->save($data);
		redirect('/users/index', 'refresh');
	}

	function edit() {
		$id = $this->uri->segment(3);
		$data['users'] = $this->users_model->find($id);
		$data['content'] = '/users/create';
		$this->load->view('includes/admin/template', $data);	
	}

	function destroy() {
		$id = $this->uri->segment(3);
		$data['users'] = $this->users_model->destroy($id);
		redirect('/users/index', 'refresh');
	}
}

?>

