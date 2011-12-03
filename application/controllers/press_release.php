<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Press_release extends CI_Controller {

	function __construct() { 
		parent::__construct();
 		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('press_release_model');
	}

	function index() {
		$data['press_release'] = $this->press_release_model->find();
		$data['content'] = 'press_release/index';
		$this->load->view('includes/admin/template', $data);
	}

	function create() {
		$data['content'] = 'press_release/create';
		$this->load->view('includes/admin/template', $data);
	}

	function save() {
		$data[] = array();
		$data['id'] = $this->input->post('id', TRUE);
		
		$data['logo'] = $this->input->post('logo', TRUE);
		$data['link'] = $this->input->post('link', TRUE);
		$data['alt'] = $this->input->post('alt', TRUE);
		$this->press_release_model->save($data);
		redirect('/press_release/index', 'refresh');
	}

	function edit() {
		$id = $this->uri->segment(3);
		$data['press_release'] = $this->press_release_model->find($id);
		$data['content'] = 'press_release/create';
		$this->load->view('includes/admin/template', $data);
	}

	function destroy() {
		$id = $this->uri->segment(3);
		$data['press_release_model'] = $this->press_release_model->destroy($id);
		redirect('/press_release/index', 'refresh');
	}
}

?>

