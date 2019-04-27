<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination', 'encryption'));
	}

	public function index() {
		$data['head_title'] = 'SB Admin - Login';
		$data['head_description'] = 'Codeigniter, SB Admin, Login';
		$data['head_css'] = array('assets/css/sb-admin.css');
		$data['footer_modal'] = '';
		$data['footer_js'] = 'login/footer_js';
		$this->load->view('login/index', $data);
	}
}
