
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <br>
      <ol class="breadcrumb">

        <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?php echo base_url('auth/logout'); ?>" >Keluar</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
             <div class="box-header"> 
              <a href="<?php echo base_url('admin/tambah_data_guru'); ?>"><button type="button" class="btn btn-primary">Tambah Data Guru</button></a>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <div class="col-xs-12 col-lg-12">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <!-- <th <input type="checkbox" id="check-all" name="delete_all">No</th> -->
                  <th>No</th>
                  <th nowrap>ID Guru</th>
                  <th nowrap>Nama</th>
                  <th nowrap>MP</th>
                  <th nowrap>Tingkat Mengajar</th>
                  <th nowrap>Kelas</th>
                  <th align="center">Tindakan</th>
                </tr>
                </thead>
                <tbody>

                  <?php $i = 1;
                  foreach ($tb_guru as $a) { 
                 ?>

                <tr>
                  <!-- <input type="checkbox" class="delete_checkbox" value="'.$id.'" name="id">&nbsp;&nbsp; -->
                  <td><?php echo $i; ?></td>
                  <td nowrap><?php echo $a->id_guru; ?></td>
                  <td nowrap><?php echo $a->nama; ?></td>
                  <td nowrap><?php echo $a->mp; ?></td>
                  <td nowrap><?php echo $a->tingkat_mengajar; ?></td>
                  <td nowrap><?php echo $a->kelas; ?></td>
                  <!-- <td nowrap><?php echo $a->daftar_pada; ?></td> -->
                  <!-- <td><img style="margin-bottom: 3px; margin-top: auto;" src="<?php echo base_url().'assets/foto_pendaftar/'.$a->foto;?>" width="50px" height="50px"></td> -->
                 <td nowrap>
                  <a href="<?php echo base_url().'admin/edit_data_guru/'.$a->id?>"> <i class="fa fa-fw fa-pencil" title="Edit Data GUru"></i></a> |
                  <a href="<?php echo base_url().'admin/hapus_data_guru/'.$a->id?>"> <i  class="fa fa-fw fa-trash" title="Hapus Data Guru"></i></a>
                  
                  <!-- <a href="<?php //echo base_url().'laporanpdf' ?>"><button class="btn btn-primary">Cetak Pdf</button></a> -->
                  </td>

              </tr>
              
              <?php $i++;
               }?>

              </table>

              </div>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
