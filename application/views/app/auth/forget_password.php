<?php include('_inc/header.php'); ?>

    <div class="card-body">
      <?php $this->load->view('app/includes/_messages.php') ?>

      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
        <?php echo form_open(base_url('app/auth/forgot_password'), 'class="login-form" '); ?>
        <div class="input-group mb-3">
          <input type="email" name="email" id="email"  class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block " value="Request new password">
          </div>
          <!-- /.col -->
        </div>
       <?php echo form_close(); ?>
      <p class="mt-3 mb-1">
        <a href="<?= base_url('app/auth/login'); ?>">You remember Password? Sign In </a>
      </p>
    </div>
    <!-- /.login-card-body -->

  <?php include('_inc/footer.php'); ?>
