<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url('admin/proses_tambahdataguru'); ?>" method="post">
              <input type="hidden" name="hidden">
              <!-- <?php  //echo form_open('admin/proses_tambahdataguru',['class'=>'form-horizontal','method'=>'post']); ?> -->
              <div class="box-body">

                <div class="form-group">
                  <label>ID GURU :</label>
                  <input type="text" name="id_guru" class="form-control" placeholder="ID GURU">
                  <?php echo(form_error('id')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('id'); ?>
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Pengajar">
                  <?php echo(form_error('nama')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                  <label for="mp">MP /Mata Pelajaran</label>
                  <input type="text" name="mp" class="form-control" placeholder="MP / Mata Pelajaran">
                  <?php echo(form_error('mp')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('mp'); ?>
                </div>

                <div class="form-group">
                  <label for="tingkat_mengajar">Tingkat Mengajar</label>
                  <input type="text" name="tingkat_mengajar" class="form-control" value="<?php echo set_value('tingkat_mengajar'); ?>" placeholder="Tingkat Mengajar Kelas">
                    <?php echo(form_error('tingkat_mengajar')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('tingkat_mengajar');?>
                </div>

                <div class="form-group">
                  <label for="kelas">Kelas</label>  
                  <input type="text" name="kelas" class="form-control" placeholder="Mengajar Kelas">
                  <?php echo(form_error('kelas')!='') ?'<span class="glyphicon glyphicon-remove form-control-feedback"></span>':''?>
                    <?php echo form_error('kelas'); ?>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            <!-- <?php echo form_close(); ?> -->

          </div>
          <!-- /.box -->

        </div>
        </div>
        </section>
</div>
