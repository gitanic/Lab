<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct() { 
		parent::__construct();
 		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('about_model');
	}

	function index() {
		$data['about'] = $this->about_model->find();
		$data['content'] = 'about/index';
		$this->load->view('includes/admin/template', $data);
	}

	function create() {
		$data['content'] = 'about/create';
		$this->load->view('includes/admin/template', $data);
	}

	function save() {
		$data[] = array();
		$data['id'] = $this->input->post('id', TRUE);
		
		$data['title'] = $this->input->post('title', TRUE);
		$data['body'] = $this->input->post('body', TRUE);
		$this->about_model->save($data);
		redirect('/about/index', 'refresh');
	}

	function edit() {
		$id = $this->uri->segment(3);
		$data['about'] = $this->about_model->find($id);
		$data['content'] = 'about/create';
		$this->load->view('includes/admin/template', $data);
	}

	function destroy() {
		$id = $this->uri->segment(3);
		$data['about_model'] = $this->about_model->destroy($id);
		redirect('/about/index', 'refresh');
	}
}

?>

