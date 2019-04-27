<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination', 'encryption'));
	}

	//Set in config.php: $route['404_override'] = 'error404';
	public function index() {
		$data['head_title'] = "SB Admin - 404 Error";
		$data['head_description'] = 'Codeigniter, SB Admin, Error 404';
		$data['error_msg'] = "Error 404 - File yang dicari tidak di temukan";
		$data['head_css'] = array('assets/vendor/datatables/dataTables.bootstrap4.css', 'assets/css/sb-admin.css');
		$data['footer_modal'] = 'welcome/footer_modal';
		$data['footer_js'] = 'errors/footer_js';
		$this->load->view('errors/error_404', $data);
	}
}
