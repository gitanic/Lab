<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Drinks extends CI_Controller {

	function __construct() { 
		parent::__construct();
 		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('drinks_model');
	}

	function index() {
		$data['drinks'] = $this->drinks_model->find();
		$data['content'] = 'drinks/index';
		$this->load->view('includes/admin/template', $data);
	}

	function create() {
		$data['content'] = 'drinks/create';
		$this->load->view('includes/admin/template', $data);
	}

	function save() {
		$data[] = array();
		$data['id'] = $this->input->post('id', TRUE);
		
		$data['title'] = $this->input->post('title', TRUE);
		$data['body'] = $this->input->post('body', TRUE);
		$this->drinks_model->save($data);
		redirect('/drinks/index', 'refresh');
	}

	function edit() {
		$id = $this->uri->segment(3);
		$data['drinks'] = $this->drinks_model->find($id);
		$data['content'] = 'drinks/create';
		$this->load->view('includes/admin/template', $data);
	}

	function destroy() {
		$id = $this->uri->segment(3);
		$data['drinks_model'] = $this->drinks_model->destroy($id);
		redirect('/drinks/index', 'refresh');
	}
}

?>

