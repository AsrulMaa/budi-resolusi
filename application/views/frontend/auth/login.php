

<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url(); ?>assets2/index2.html"><b>ABSE</b>NSI IBNU-<b>SINA</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" >
    <p class="login-box-msg">Silahkan ketikan email dan password untuk masuk sistem ABENSI <b>IBNU</b>-SINA</p>

    <?= $this->session->flashdata('message'); ?>

    <?php echo form_open('auth');?>

      <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email atau username" value="<?= set_value('email') ?>">
                      <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                      <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
      
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat" >Masuk Sistem</button>
        </div>
        <!-- /.col -->
      </div>
      <hr>
                    <div style="text-align: center;">
                    <a class="small" href="<?= base_url('auth/changepass'); ?>">Lupa Password?</a><br>
                    <a class="small" href="<?= base_url('index.php/auth/registrasi'); ?>">Buat Akun Baru!</a><br>
                    </div>

    <?php echo form_close(); ?>

    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
