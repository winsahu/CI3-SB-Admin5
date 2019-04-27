<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination', 'encryption'));
	}

	public function index() {
		$data['head_title'] = 'SB Admin - Tables';
		$data['head_description'] = 'Codeigniter, SB Admin, Tables';
		$data['head_css'] = array('assets/vendor/datatables/dataTables.bootstrap4.css', 'assets/css/sb-admin.css');
		$data['footer_modal'] = 'welcome/footer_modal';
		$data['footer_js'] = 'tables/footer_js';
		$this->load->view('tables/index', $data);
	}
}
