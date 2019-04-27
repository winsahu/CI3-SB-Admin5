<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination', 'encryption'));
	}

	public function index() {
		$data['head_title'] = 'SB Admin - Charts';
		$data['head_description'] = 'Codeigniter, SB Admin, Charts';
		$data['head_css'] = array('assets/vendor/datatables/dataTables.bootstrap4.css', 'assets/css/sb-admin.css');
		$data['footer_modal'] = 'welcome/footer_modal';
		$data['footer_js'] = 'charts/footer_js';
		$this->load->view('charts/index', $data);
	}
}
