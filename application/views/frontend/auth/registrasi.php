<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>ABSE</b>NSI IBNU-<b>SINA</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Halaman Registrasi Akun</p>

    <form action="<?php echo base_url('auth/registrasi'); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="name" class="form-control form-control-user" placeholder="Nama Anda" value="<?= set_value('name') ?>">
                    <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Anda" value="<?= set_value('email') ?>">
                  <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <input type="password" name="password1" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    <?= form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password2" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Konfirmasi Password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrasi</button>
        </div>
        <!-- /.col -->
        <div class="col-xs-12 text-center">
          <div class="checkbox icheck">
            <label>
                <a href="<?php echo base_url('index.php/auth'); ?>">Sudah punya akun</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
      </div>
    </form>
<!-- 
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="login.html" class="text-center">I already have a membership</a>
  </div> -->
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
