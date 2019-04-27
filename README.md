# CI3-SB-Admin5
Codeigniter 3.1.10 with SB Admin ver.5 Template

1. Views layout/header template
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?= $head_description ?>">
<meta name="author" content="Winston Sahusilawane">
<link rel="icon" href="<?= site_url('assets/favicon.ico'); ?>">
<title><?= $head_title ?></title>
<!-- Custom fonts for this template-->
<link href="<?= site_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
<?php if (! empty($head_css)) {
	foreach($head_css as $css) {
		echo '<link rel="stylesheet" type="text/css" href="' . site_url($css) . '">' . "\n";
	}
} ?>
</head>
```

2. Views layout/footer template
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php if (! empty($footer_modal)) $this->load->view($footer_modal); ?>
<!-- Bootstrap core JavaScript-->
<script src="<?= site_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= site_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<?php if (! empty($footer_js)) $this->load->view($footer_js); ?>
</body>
</html>
```

3. Controller template
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_name extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination', 'encryption'));
	}

	public function index() {
		$data['head_title'] = 'SB Admin - Welcome';
		$data['head_description'] = 'Codeigniter, SB Admin, Welcome';
		$data['head_css'] = array('assets/vendor/datatables/dataTables.bootstrap4.css', 'assets/css/sb-admin.css');
		$data['footer_modal'] = 'welcome/footer_modal';
		$data['footer_js'] = 'welcome/footer_js';
		$this->load->view('welcome/index', $data);
	}
}
```

4. Views welcome/index template
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layout/main_header');
?>
<body id="page-top">
  <?php $this->load->view('layout/main_menu'); ?>

<!-- Content go here -->

<?php
$this->load->view('layout/main_footer');
?>
```

5. Views welcome/footer_modal template
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= site_url('login') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>
```

6. Views welcome/footer_js template
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- Core plugin JavaScript-->
  <script src="<?= site_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?= site_url('assets/vendor/chart.js/Chart.min.js'); ?>"></script>
  <script src="<?= site_url('assets/vendor/datatables/jquery.dataTables.js'); ?>"></script>
  <script src="<?= site_url('assets/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= site_url('assets/js/sb-admin.min.js'); ?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?= site_url('assets/js/demo/datatables-demo.js'); ?>"></script>
  <script src="<?= site_url('assets/js/demo/chart-area-demo.js'); ?>"></script>
```
