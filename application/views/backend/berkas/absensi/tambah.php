
<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Halaman Tambah Data ABSENSI</h3>
            </div>


          <form role="form" action="<?php  echo base_url('admin/proses_tambah'); ?> " method="post" class="form-horizontal">
            <!-- <input type="hidden" name="hidden"> -->
            <div class="box-body">

              <div class="form-group">
                <label for="nama" class="control-label col-sm-3">Nama Pengajar</label>
                <div class="col-sm-8">
                  <input type="text" name="nama" class="form-control" placeholder="Nama Pengajar">
                  <?php echo(form_error('nama')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('nama'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="mp" class="control-label col-sm-3">MP / Mata Pelajaran</label>
                <div class="col-sm-8">
                  <input type="text" name="mp" class="form-control" placeholder="Mata Pelajaran">
                  <?php echo(form_error('mp')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('mp'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tingkat_mengajar" class="control-label col-sm-3">Tingkat Mengajar</label>
                <div class="col-sm-8">
                  <input type="text" name="tingkat_mengajar" class="form-control" placeholder="Tingkat Mengajar">
                  <?php echo(form_error('tingkat_mengajar')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tingkat_mengajar'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="kelas" class="control-label col-sm-3">Kelas</label>
                <div class="col-sm-8">
                  <input type="text" name="kelas" class="form-control" placeholder="Mengajar Kelas">
                  <?php echo(form_error('kelas')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('kelas'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tms" class="control-label col-sm-3">TMS MINGGU KE 1</label>
                <div class="col-sm-8">
                  <input type="number" name="tms" class="form-control" placeholder="Tatap Muka Seharusnya">
                  <?php echo(form_error('tms')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tms'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tmh" class="control-label col-sm-3">TMH MINGGU KE 1</label>
                <div class="col-sm-8">
                  <input type="number" name="tmh" class="form-control" placeholder="Tatap Muka Harian">
                  <?php echo(form_error('tmh')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tmh'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="infal" class="control-label col-sm-3">INFAL MINGGU KE 1</label>
                <div class="col-sm-8">
                  <input type="number" name="infal" class="form-control" placeholder="Tatap Muka Pengganti">
                  <?php echo(form_error('infal')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('infal'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tms2" class="control-label col-sm-3">TMS MINGGU KE 2</label>
                <div class="col-sm-8">
                  <input type="number" name="tms2" class="form-control" placeholder="Tatap Muka Seharusnya">
                  <?php echo(form_error('tms2')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tms2'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tmh2" class="control-label col-sm-3">TMH MINGGU KE 2</label>
                <div class="col-sm-8">
                  <input type="number" name="tmh2" class="form-control" placeholder="Tatap Muka Harian">
                  <?php echo(form_error('tmh2')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tmh2'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="infal2" class="control-label col-sm-3">INFAL MINGGU KE 2</label>
                <div class="col-sm-8">
                  <input type="number" name="infal2" class="form-control" placeholder="Tatap Muka Pengganti">
                  <?php echo(form_error('infal2')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('infal2'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tms3" class="control-label col-sm-3">TMS MINGGU KE 3</label>
                <div class="col-sm-8">
                  <input type="number" name="tms3" class="form-control" placeholder="Tatap Muka Seharusnya">
                  <?php echo(form_error('tms3')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tms3'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tmh3" class="control-label col-sm-3">TMH MINGGU KE 3</label>
                <div class="col-sm-8">
                  <input type="number" name="tmh3" class="form-control" placeholder="Tatap Muka Harian">
                  <?php echo(form_error('tmh3')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tmh3'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="infal3" class="control-label col-sm-3">INFAL MINGGU KE 3</label>
                <div class="col-sm-8">
                  <input type="number" name="infal3" class="form-control" placeholder="Tatap Muka Pengganti">
                  <?php echo(form_error('infal3')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('infal3'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tms4" class="control-label col-sm-3">TMS MINGGU KE 4</label>
                <div class="col-sm-8">
                  <input type="number" name="tms4" class="form-control" placeholder="Tatap Muka Seharusnya">
                  <?php echo(form_error('tms4')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tms4'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tmh4" class="control-label col-sm-3">TMH MINGGU KE 4</label>
                <div class="col-sm-8">
                  <input type="number" name="tmh4" class="form-control" placeholder="Tatap Muka Harian">
                  <?php echo(form_error('tmh4')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tmh4'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="infal4" class="control-label col-sm-3">INFAL MINGGU KE 4</label>
                <div class="col-sm-8">
                  <input type="number" name="infal4" class="form-control" placeholder="Tatap Muka Pengganti">
                  <?php echo(form_error('infal4')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('infal4'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tms5" class="control-label col-sm-3">TMS MINGGU KE 5</label>
                <div class="col-sm-8">
                  <input type="number" name="tms5" class="form-control" placeholder="Tatap Muka Seharusnya">
                  <?php echo(form_error('tms5')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tms5'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tmh5" class="control-label col-sm-3">TMH MINGGU KE 5</label>
                <div class="col-sm-8">
                  <input type="number" name="tmh5" class="form-control" placeholder="Tatap Muka Harian">
                  <?php echo(form_error('tmh5')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tmh5'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="infal5" class="control-label col-sm-3">INFAL MINGGU KE 5</label>
                <div class="col-sm-8">
                  <input type="number" name="infal5" class="form-control" placeholder="Tatap Muka Pengganti">
                  <?php echo(form_error('infal5')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('infal5'); ?>
                </div>
                </div>

                
            <div class="form-group">
              <label class="col-sm-5 text-right "></label>
              <div class="col-sm-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                
              </div>
              <!-- <div class="col-sm-2">
                <a href="<?php echo base_url('admin/lihat_data_absensi'); ?>" class="btn btn-warning" >Cancel</a>
              </div> -->
            </div>

            </div>

          </form>

    </div>
</div>
</div>
</section>
</div>