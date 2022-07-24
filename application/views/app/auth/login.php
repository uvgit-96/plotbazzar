<?php include('_inc/header.php'); ?>
  <!-- /.login-logo -->

    <div class="card-body">
      <p class="login-box-msg">Sign in superadmin</p>

      <?php if($this->session->flashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          <?= $this->session->flashdata('error')?>
        </div>
      <?php endif; ?>
        <?php echo form_open(base_url('app/auth/login'), 'class="login-form" '); ?>
        <div class="input-group mb-3">
          <input type="text" name="username" id="name" class="form-control <?= (isset($error['username']))?'is-invalid': ''; ?>" placeholder="Name/ Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pen"></span>
            </div>
          </div>
          <span class="input-group" ><small class="text-danger"><?= (isset($error['username']))?$error['username']: ''; ?></small> </span>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control <?= (isset($error['password']))?'is-invalid': ''; ?>" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <span class="input-group" ><small class="text-danger"><?= (isset($error['password']))?$error['password']: ''; ?></small> </span>
        </div>
        <div class="row pb-3 pt-2">
        <!--   <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-12 text-danger">
            <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
            <input type="submit" name="submit" id="submit" class="btn btn-sm btn-outline-success btn-block" value="Sign In">
          </div>
          <!-- /.col -->
        </div>
      <!-- </form> -->
        <?php echo form_close(); ?>

   <!--    <div class="social-auth-links text-center mt-2 mb-3">
        <div class="row">
          <div class="col-6">
            <a href="#" class="btn btn-sm btn-block btn-primary">
              <i class="fab fa-facebook mr-2"></i> Facebook
            </a>
          </div>
            <div class="col-6">
            <a href="#" class="btn btn-sm btn-block btn-danger">
              <i class="fab fa-google-plus mr-2"></i> Google+
            </a>
            </div>
          </div>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="<?= base_url('app/auth/forgot_password'); ?>">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="<?= base_url('app/auth/register'); ?>" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.card-body -->


<?php include('_inc/footer.php'); ?>
