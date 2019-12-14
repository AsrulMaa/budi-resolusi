
<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Halaman Edit Data ABSENSI</h3>
            </div>
    <?php  
          foreach ($tb_absensi as $a ){ 
        ?>

          <form action=" <?php  echo site_url('Admin/simpan_dataabsensi/'.$a->id); ?> " method="post" class="form-horizontal">

            <div class="box-body">

              <div class="form-group">
                <label for="nama" class="control-label col-sm-3">Nama Pengajar</label>
                <div class="col-sm-8">
                  <input type="text" name="nama" class="form-control" value="<?php echo $a->nama; ?>">
                  <?php echo(form_error('nama')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('nama'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="mp" class="control-label col-sm-3">MP / Mata Pelajaran</label>
                <div class="col-sm-8">
                  <input type="text" name="mp" class="form-control" value="<?php echo $a->mp; ?>">
                  <?php echo(form_error('mp')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('mp'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tingkat_mengajar" class="control-label col-sm-3">Tingkat Mengajar</label>
                <div class="col-sm-8">
                  <input type="text" name="tingkat_mengajar" class="form-control" value="<?php echo $a->tingkat_mengajar; ?>">
                  <?php echo(form_error('tingkat_mengajar')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tingkat_mengajar'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="kelas" class="control-label col-sm-3">Kelas</label>
                <div class="col-sm-8">
                  <input type="text" name="kelas" class="form-control" value="<?php echo $a->kelas; ?>">
                  <?php echo(form_error('kelas')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('kelas'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tms" class="control-label col-sm-3">TMS MINGGU KE 1</label>
                <div class="col-sm-8">
                  <input type="number" name="tms" class="form-control" value="<?php echo $a->tms; ?>">
                  <?php echo(form_error('tms')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tms'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tmh" class="control-label col-sm-3">TMH MINGGU KE 1</label>
                <div class="col-sm-8">
                  <input type="number" name="tmh" class="form-control" value="<?php echo $a->tmh; ?>">
                  <?php echo(form_error('tmh')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tmh'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="infal" class="control-label col-sm-3">INFAL MINGGU KE 1</label>
                <div class="col-sm-8">
                  <input type="number" name="infal" class="form-control" value="<?php echo $a->infal; ?>">
                  <?php echo(form_error('infal')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('infal'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tms2" class="control-label col-sm-3">TMS MINGGU KE 2</label>
                <div class="col-sm-8">
                  <input type="number" name="tms2" class="form-control" value="<?php echo $a->tms2; ?>">
                  <?php echo(form_error('tms2')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tms2'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tmh2" class="control-label col-sm-3">TMH MINGGU KE 2</label>
                <div class="col-sm-8">
                  <input type="number" name="tmh2" class="form-control" value="<?php echo $a->tmh2; ?>">
                  <?php echo(form_error('tmh2')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tmh2'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="infal2" class="control-label col-sm-3">INFAL MINGGU KE 2</label>
                <div class="col-sm-8">
                  <input type="number" name="infal2" class="form-control" value="<?php echo $a->infal2; ?>">
                  <?php echo(form_error('infal2')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('infal2'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tms3" class="control-label col-sm-3">TMS MINGGU KE 3</label>
                <div class="col-sm-8">
                  <input type="number" name="tms3" class="form-control" value="<?php echo $a->tms3; ?>">
                  <?php echo(form_error('tms3')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tms3'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tmh3" class="control-label col-sm-3">TMH MINGGU KE 3</label>
                <div class="col-sm-8">
                  <input type="number" name="tmh3" class="form-control" value="<?php echo $a->tmh3; ?>">
                  <?php echo(form_error('tmh3')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tmh3'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="infal3" class="control-label col-sm-3">INFAL MINGGU KE 3</label>
                <div class="col-sm-8">
                  <input type="number" name="infal3" class="form-control" value="<?php echo $a->infal3; ?>">
                  <?php echo(form_error('infal3')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('infal3'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tms4" class="control-label col-sm-3">TMS MINGGU KE 4</label>
                <div class="col-sm-8">
                  <input type="number" name="tms4" class="form-control" value="<?php echo $a->tms4; ?>">
                  <?php echo(form_error('tms4')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tms4'); ?>
                </div>
                </div>


                <div class="form-group">
                <label for="tmh4" class="control-label col-sm-3">TMH MINGGU KE 4</label>
                <div class="col-sm-8">
                  <input type="number" name="tmh4" class="form-control" value="<?php echo $a->tmh4; ?>">
                  <?php echo(form_error('tmh4')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tmh4'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="infal4" class="control-label col-sm-3">INFAL MINGGU KE 4</label>
                <div class="col-sm-8">
                  <input type="number" name="infal4" class="form-control" value="<?php echo $a->infal4; ?>">
                  <?php echo(form_error('infal4')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('infal4'); ?>
                </div>
                </div>


                <div class="form-group">
                <label for="tms5" class="control-label col-sm-3">TMS MINGGU KE 5</label>
                <div class="col-sm-8">
                  <input type="number" name="tms5" class="form-control" value="<?php echo $a->tms5; ?>">
                  <?php echo(form_error('tms5')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tms5'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="tmh5" class="control-label col-sm-3">TMH MINGGU KE 5</label>
                <div class="col-sm-8">
                  <input type="number" name="tmh5" class="form-control" value="<?php echo $a->tmh5; ?>">
                  <?php echo(form_error('tmh5')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tmh5'); ?>
                </div>
                </div>

                <div class="form-group">
                <label for="infal5" class="control-label col-sm-3">INFAL MINGGU KE 5</label>
                <div class="col-sm-8">
                  <input type="number" name="infal5" class="form-control" value="<?php echo $a->infal5; ?>">
                  <?php echo(form_error('infal5')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('infal5'); ?>
                </div>
                </div>

                
            
            <div class="form-group">
              <label class="col-sm-5 text-right "></label>
              <div class="col-sm-2">
                <input type="submit" class="btn btn-primary" value="simpan">
                
              </div>
              <div class="col-sm-2">
                <a href="<?php echo base_url('admin/lihat_data_absensi'); ?>" class="btn btn-warning" >Cancel</a>
              </div>
            </div>

            </div>

          </form>
  <?php } ?>
    </div>
</div>
</div>
</section>
</div>