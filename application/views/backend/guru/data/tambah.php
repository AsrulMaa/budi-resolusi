
    <div class="container"  style="background: #f7f7f7;">
      <br>
          
        <?php
          if(isset($_SESSION['pesan']))
          {
        ?>
            <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Sukses!</strong> <?php echo $_SESSION['pesan']; ?> <a href="<?= base_url('user'); ?>">Klik untuk melihat pengumuman siswa baru</a>
            </div>
        <?php
          }
        ?>
        <?php if (isset($_SESSION['error'])): ?>
          <div class="alert alert-warning">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error !</strong> <?php echo $_SESSION['error']; ?> 
            </div>
        <?php endif ?>

      <a style="float: right;" class="btn btn-primary" href="<?= base_url('user'); ?>">Kembali</a><br>
      <h3>Berdasarkan peraturan yang tertera disekolah NAMA SEKOLAH </h3>
      <ul>
        <!-- <li>pendaftar diwajibkan membawa foto ukuran 3x3</li> -->
        <!-- <li>Setelah berhasil mendaftar, silahkan hubungi pihak sekolah dengan nomor yang tertera</li> -->
        <li>Calon peserta wajib mengisi form pendaftaran dengan data diri yang sebenarnya.</li>
        <!-- <li>Calon siswa wajib memberikan data dengan peraturan yang ada.</li> -->
        <!-- <li>Berkas yang tidak lengkap bisa menyusul(Foto ukuran 3x4).</li> -->
        <li>Pembayaran administrasi bisa dilunasi disekolah saat jadwal masuk sekolah</li>
      </ul>
      <h3 align="center">Identitas Pendaftar</h3>
        <br>

        <?php echo form_open_multipart('upload_berkas/simpan_upload', ['class' => 'form-horizontal', 'method' => 'post']); ?>
        <?= validation_errors() ?>
              <div class="form-group <?php echo (form_error('nama') != '') ? 'has-error has-feedback' : '' ?>">
                <?php    
                    $csrf = array(
                              'name' => $this->security->get_csrf_token_name(),
                              'hash' => $this->security->get_csrf_hash());
                ?>
            <div class="form-group">
              <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
            </div>

                <input type="hidden" name="id" value="<?= $this->session->userdata('id'); ?>">
                <label for="nama" class="control-label col-lg-3">Nama Lengkap </label>
                <div class="col-lg-6">
                  <input type="text" class="form-control" name="nama" 
                  value="<?php echo set_value('nama'); ?>">
                  <?php echo (form_error('nama') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
                  <?php echo form_error('nama'); ?>
                </div>
              </div>

              <div class="form-group <?php echo (form_error('alamat') != '') ? 'has-error has-feedback' : '' ?>">
                <label for="alamat" class="control-label col-lg-3">Alamat Lengkap </label>
                <div class="col-lg-6">
                  <input type="text" class="form-control" name="alamat" 
                  value="<?php echo set_value('alamat'); ?>">
                  <?php echo (form_error('alamat') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
                  <?php echo form_error('alamat'); ?>
                </div>
              </div>

              <div class="form-group <?php echo (form_error('tempat') != '') ? 'has-error has-feedback' : '' ?>">
                <label for="tempat" class="control-label col-lg-3">Tempat Lahir </label>
                <div class="col-lg-6">
                  <input type="text" class="form-control" name="tempat" 
                  value="<?php echo set_value('tempat'); ?>">
                  <?php echo (form_error('tempat') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
                  <?php echo form_error('tempat'); ?>
                </div>
              </div>

              <div class="form-group <?php echo (form_error('tanggal') != '') ? 'has-error has-feedback' : '' ?>">
                <label for="tanggal" class="control-label col-lg-3">Tanggal Lahir </label>
                <div class="col-lg-2">
                  <input type="number" class="form-control" name="tanggal" 
                  value="<?php echo set_value('tanggal'); ?>" placeholder="Tanggal">
                  <?php echo (form_error('tanggal') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
                  <?php echo form_error('tanggal'); ?>
                </div>

                <div class="col-lg-2">
                  <input type="number" class="form-control" name="bulan" 
                  value="<?php echo set_value('bulan'); ?>" placeholder="Bulan">
                  <?php echo (form_error('bulan') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
                  <?php echo form_error('bulan'); ?>
                </div>

                <div class="col-lg-2">
                  <input type="number" class="form-control" name="tahun" 
                  value="<?php echo set_value('tahun'); ?>" placeholder="Tahun">
                  <?php echo (form_error('tahun') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
                  <?php echo form_error('tahun'); ?>
                </div>

              </div>

              <div class="form-group <?php echo (form_error('jenis_kelamin') != '') ? 'has-error has-feedback' : '' ?>">
                <label for="jenis_kelamin" class="control-label col-lg-3">Jenis Kelamin </label>
                <div class="col-lg-6" class="form-control">
                  <input type="radio" name="jenis_kelamin" value="1"<?php echo set_radio('laki-laki','1'); ?>>&nbsp;Laki-laki
                  <input type="radio" name="jenis_kelamin" value="2"<?php echo set_value('perempuan','3'); ?>>&nbsp;Perempuan
                  <?php echo (form_error('jenis_kelamin') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
                  <?php echo form_error('jenis_kelamin'); ?>
                </div>
              </div>

              <div class="form-group <?php echo (form_error('nik') != '') ? 'has-error has-feedback' : '' ?>">
                <label for="nik" class="control-label col-lg-3">NIK / No. Kitas </label>
                <div class="col-lg-4">
                  <input type="number" class="form-control" name="nik" 
                  value="<?php echo set_value('nik'); ?>">
                  <?php echo (form_error('nik') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
                  <?php echo form_error('nik'); ?>
                </div>
              </div>

              <div class="form-group <?php echo (form_error('akta') != '') ? 'has-error has-feedback' : '' ?>">
                <label for="akta" class="control-label col-lg-3">Akta </label>
                <div class="col-lg-4">
                  <input type="number" class="form-control" name="akta" 
                  value="<?php echo set_value('akta'); ?>">
                  <?php echo (form_error('akta') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
                  <?php echo form_error('akta'); ?>
                </div>
              </div>

              <div class="form-group <?php echo (form_error('agama') != '') ? 'has-error has-feedback' : '' ?>">
                <label for="agama" class="control-label col-lg-3">Agama </label>
                <div class="col-lg-6">
                  <input type="radio" name="agama" value="1"<?php echo set_radio('Budha','1'); ?>>&nbsp;Budha
                  <input type="radio" name="agama" value="2"<?php echo set_radio('Hindu','2'); ?>>&nbsp;Hindu
                  <input type="radio" name="agama" value="3"<?php echo set_radio('Islam','3'); ?>>&nbsp;Islam
                  <input type="radio" name="agama" value="4"<?php echo set_radio('Kristen','4'); ?>>&nbsp;Kristen
                  <!-- <input type="text" class="form-control" name="agama" 
                  value="<?php //echo set_value('agama'); ?>"> -->
                  <?php echo (form_error('agama') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
                  <?php echo form_error('agama'); ?>
                </div>
              </div>

              <div class="form-group <?php echo (form_error('asal_negara') != '') ? 'has-error has-feedback' : '' ?>">
                <label for="asal_negara" class="control-label col-lg-3">Asal Negara </label>
                <div class="col-lg-6">
                  <input type="text" class="form-control" name="asal_negara" 
                  value="<?php echo set_value('asal_negara'); ?>">
                  <?php echo (form_error('asal_negara') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
                  <?php echo form_error('asal_negara'); ?>
                </div>
              </div>

              <div class="form-group <?php echo (form_error('nama_ayah') != '') ? 'has-error has-feedback' : '' ?>">
                <label for="nama_ayah" class="control-label col-lg-3">Nama Ayah </label>
                <div class="col-lg-6">
                  <input type="text" class="form-control" name="nama_ayah" 
                  value="<?php echo set_value('nama_ayah'); ?>">
                  <?php echo (form_error('nama_ayah') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
                  <?php echo form_error('nama_ayah'); ?>
                </div>
              </div>

              <div class="form-group <?php echo (form_error('nama_ibu') != '') ? 'has-error has-feedback' : '' ?>">
                <label for="nama_ibu" class="control-label col-lg-3">Nama Ibu </label>
                <div class="col-lg-6">
                  <input type="text" class="form-control" name="nama_ibu" 
                  value="<?php echo set_value('nama_ibu'); ?>">
                  <?php echo (form_error('nama_ibu') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
                  <?php echo form_error('nama_ibu'); ?>
                </div>
              </div>

              <div class="form-group <?php echo (form_error('no_telp') != '') ? 'has-error has-feedback' : '' ?>">
                <label for="no_telp" class="control-label col-lg-3">No. Telepon orang tua </label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="no_telp" 
                  value="<?php echo set_value('no_telp'); ?>">
                  <?php echo (form_error('no_telp') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
                  <?php echo form_error('no_telp'); ?>
                </div>
              </div>


               <div class="form-group <?php echo (form_error('foto') != '') ? 'has-error has-feedback' : '' ?>">
                <label for="Foto" class="control-label col-lg-3">Foto berwarna ukuran 3x3</label> 
                <div class="col-lg-6">
                  <input type="file" name="foto">
                  <?php echo form_error('foto'); ?>
                </div>
              </div>
    
              <div class="form-group">
                <label class="col-lg-5"></label>
                <div class="col-md-3" style="margin-left: 60px;">
                  <input type="submit" class="btn btn-primary" style="width: 50%;" value="Kirim" onclick="return confirm('Apakah Data Anda Sudah Lengkap ?')">
                </div>
              </div>
        
         <?php echo form_close(); ?>
         <br>
      </div>
        
        <script src="<?php echo base_url('assets/js/SmoothScroll.min.js')?>"></script>



