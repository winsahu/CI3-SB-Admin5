<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layout/main_header');
?>
<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
        <div class="text-center mb-4">
          <h4>Forgot your password?</h4>
          <p>Enter your email address and we will send you instructions on how to reset your password.</p>
        </div>
        <form>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Enter email address</label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="<?= site_url('login') ?>">Reset Password</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?= site_url('register') ?>">Register an Account</a>
          <a class="d-block small" href="<?= site_url('login') ?>">Login Page</a>
        </div>
      </div>
    </div>
  </div>

<?php
$this->load->view('layout/main_footer');
?>
