<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layout/main_header');
?>
<body id="page-top">
  <?php $this->load->view('layout/main_menu'); ?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?= site_url('') ?>">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">404 Error</li>
        </ol>

        <!-- Page Content -->
        <h1 class="display-1">404</h1>
        <p class="lead">Page not found. You can
          <a href="javascript:history.back()">go back</a>
          to the previous page, or
          <a href="<?= site_url('') ?>">return home</a>.</p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright ©sahusilawane.net 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<?php
$this->load->view('layout/main_footer');
?>
