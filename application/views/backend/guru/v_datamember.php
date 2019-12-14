
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <br>
      <ol class="breadcrumb">

        <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?php echo base_url('auth/logout'); ?>" onclick="return confirm('Apakah Anda Yakin Ingin Keluar Dari Halaman Ini ?')">Keluar</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
             <div class="box-header"> 
              <a href="<?php echo base_url('admin/tambah_pendaftar'); ?>"><button type="button" class="btn btn-primary">Tambah Siswa</button></a>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <div class="col-xs-12 col-lg-12">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th nowrap>Tempat Tgl Lahir</th>
                  <th nowrap>JK</th>
                  <th nowrap>Nik</th>
                  <th nowrap>Akta</th>
                  <th>Agama</th>
                  <th nowrap>Asal Negara</th>
                  <th nowrap>Nama Ibu</th>
                  <th nowrap>Nama Ayah</th>
                  <th>No.Telp</th>
                  <th>Daftar Pada</th>
                  <th>Status</th>
                  <th align="center">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($t_pendaftar_sd as $a) { 
                 ?>

                <tr>
                  <td><?php echo $i; ?></td>
                  <td nowrap><?php echo $a->nama; ?></td>
                  <td nowrap><?php echo $a->ttl; ?></td>
                  <td nowrap><?php echo $a->jenis_kelamin; ?></td>
                   <td><?php echo $a->agama; ?></td>
                  <td nowrap><?php echo $a->asal_negara; ?></td>
                  <td nowrap><?php echo $a->nik; ?></td>
                  <td nowrap><?php echo $a->akta; ?></td>
                  <td nowrap><?php echo $a->nama_ayah; ?></td>
                  <td nowrap><?php echo $a->nama_ibu; ?></td>
                  <td nowrap><?php echo $a->status; ?></td>
                  <td nowrap><?php echo $a->status; ?></td>
                  <td nowrap><?php echo $a->daftar_pada; ?></td>
                  <td>
                    <?php 
                      if ($a->status !=0) {
                        echo "diterima";
                      }
                      else{
                        echo "Pending";   
                      }

                     ?>
                  </td>
                  
                 <td nowrap>
                  <a href="<?php echo base_url().'user/edit_pendaftar/'. $a->id?>"> <i class="fa fa-fw fa-pencil" title="Edit"></i></a> |
                  </td>

              </tr>
              
              <?php $i++;
               } ?>

                <!--<tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>-->
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
