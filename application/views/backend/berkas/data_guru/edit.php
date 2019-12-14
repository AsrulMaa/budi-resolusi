
<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Halaman Edit Data Guru</h3>
            </div>
    <?php  
          foreach ($tb_guru as $a ){ 
        ?>

          <form action=" <?php  echo site_url('Admin/simpan_dataguru/'.$a->id); ?> " method="post" class="form-horizontal">

            <div class="box-body">

              <div class="form-group">
                  <label for="id_guru" class="col-sm-3">ID GURU :</label>
                  <div class="col-sm-8">
                  <input type="text" name="id_guru" class="form-control" value="<?php echo $a->id_guru; ?>" placeholder="ID GURU">
                  <?php echo(form_error('id_guru')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('id_guru'); ?>
                    </div>
              </div>

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