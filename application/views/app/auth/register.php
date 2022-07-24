<?php include('_inc/header.php'); ?>
<!-- Registeration page goes here -->

  <div class="card-body">
    <p class="login-box-msg">Register a new membership</p>
     <?php echo form_open(base_url('app/auth/register'), 'class="login-form" '); ?>
    <!-- <form action="../../index.html" method="post"> -->
    <div class="row">
      <div class="col-6">
        <div class="input-group mb-3">
          <input type="text" name="firstname" id="firstname" value="<?= set_value("firstname"); ?>" class="form-control <?= (isset($error['firstname']))?'is-invalid': ''; ?>" placeholder="First Name">
          <!-- <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div> -->
          <span class="input-group" ><small class="text-danger"><?= (isset($error['firstname']))?$error['firstname']: ''; ?></small> </span>
        </div>
      </div>
      <div class="col-6">
        <div class="input-group mb-3">
          <input type="text" name="lastname" id="lastname" value="<?= set_value("lastname"); ?>" class="form-control <?= (isset($error['lastname']))?'is-invalid': ''; ?>" placeholder="Last Name">
          <!-- <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div> -->
          <span class="input-group" ><small class="text-danger"><?= (isset($error['lastname']))?$error['lastname']: ''; ?></small> </span>
        </div>
      </div>
    </div>
      <div class="input-group mb-3">
        <input type="text" name="username" id="name" value="<?= set_value("username"); ?>" class="form-control <?= (isset($error['username']))?'is-invalid': ''; ?>" placeholder="Username">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
        <span class="input-group" ><small class="text-danger"><?= (isset($error['username']))?$error['username']: ''; ?></small> </span>
      </div>

      <div class="input-group mb-3">
        <input type="email" name="email" id="email" value="<?= set_value("email"); ?>"  class="form-control <?= (isset($error['email']))?'is-invalid': ''; ?>" placeholder="Email">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
        <span class="input-group" ><small class="text-danger"><?= (isset($error['email']))?$error['email']: ''; ?></small> </span>
      </div>
      <div class="input-group mb-3">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
        <span class="input-group" ><small class="text-danger"><?= (isset($error['password']))?$error['password']: ''; ?></small> </span>
      </div>
      <div class="input-group mb-3">
        <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Retype password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
        <span class="input-group" ><small class="text-danger"><?= (isset($error['confirm_password']))?$error['confirm_password']: ''; ?></small> </span>
      </div>
      <div class="row mb-3">
        <div class="col-12">
          <div class="icheck-primary">
            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
            <label for="agreeTerms">
             I agree to the <a href="#">terms</a>
            </label>
          </div>
          <span class="input-group" ><small class="text-danger"><?= (isset($error['terms']))?$error['terms']: ''; ?></small> </span>
        </div>

        <?php if($reCaptcha): ?>
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
           <?php echo $reCaptcha; ?>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
        <?php endif; ?>

        <?php if($this->recaptcha_status): ?>
              <div class="recaptcha-cnt">
                  <?php generate_recaptcha(); ?>
              </div>
            <?php endif; ?>
        <!-- /.col -->
        <div class="col-2"> &nbsp;</div>
        <div class="col-8">
          <!-- <button type="submit" class="btn btn-primary btn-block">Register</button> -->
          <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Register">
        </div>
        <div class="col-2"> &nbsp;</div>
        <!-- /.col -->
      </div>
    <!-- </form> -->
    <?php echo form_close(); ?>

    <!-- <div class="social-auth-links text-center">
      <a href="#" class="btn btn-block btn-primary">
        <i class="fab fa-facebook mr-2"></i>
        Sign up using Facebook
      </a>
      <a href="#" class="btn btn-block btn-danger">
        <i class="fab fa-google-plus mr-2"></i>
        Sign up using Google+
      </a>
    </div> -->

    <a href="<?= base_url('app/auth/login'); ?>" class="text-center mt-2">I already have a membership</a>
  </div>
  <!-- /.form-box -->

<?php include('_inc/footer.php'); ?>
