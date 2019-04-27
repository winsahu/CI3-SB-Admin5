<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layout/main_header');
?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="<?= site_url('') ?>">Login</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?= site_url('register') ?>">Register an Account</a>
          <a class="d-block small" href="<?= site_url('forgot') ?>">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

<?php
$this->load->view('layout/main_footer');
?>
