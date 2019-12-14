
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <br>
      <ol class="breadcrumb">

        <li><a href="<?php echo base_url('user'); ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?php echo base_url('auth/logout'); ?>" >Keluar</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <div class="col-xs-12 col-lg-12">
              <table  class="table table-bordered table-striped"><!-- id="example1" -->
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th nowrap>MP</th>
                  <th nowrap>TINGKAT</th>
                  <th>KELAS</th>
                  <th>JP</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
<!-- 
                  <?php $i=1;
                  foreach($t_pendaftar_sd as $a){
                 ?> -->

                <tr>
                  <td><?php echo $i; ?></td>
                  <td nowrap><?php echo $a->nama; ?></td>
                  <td nowrap><?php echo $a->alamat; ?></td>
                  <td nowrap><?php echo $a->jenis_kelamin; ?></td>
                  <!-- <td nowrap><?php echo $a->tempat; ?></td>
                  <td nowrap><?php echo $a->tanggal; ?></td>
                  <td nowrap><?php echo $a->tahun; ?></td>
                   <td><?php echo $a->agama; ?></td>
                  <td nowrap><?php echo $a->asal_negara; ?></td>
                  <td nowrap><?php echo $a->nik; ?></td>
                  <td nowrap><?php echo $a->akta; ?></td>
                  <td nowrap><?php echo $a->nama_ayah; ?></td>
                  <td nowrap><?php echo $a->nama_ibu; ?></td> -->
                  <!-- <td nowrap><?php echo $a->no_telp; ?></td>
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
                  <td nowrap><?php echo $a->daftar_pada; ?></td>
                  <td ><img style="margin-bottom: 3px; margin-top: auto;" src="<?php echo base_url().'upload/photo/'.$a->foto ?>" width="150px" height="150px"></td>
                 <td nowrap> -->
                  <!-- <a href="<?php echo base_url().'user/edit_identitas/'.$a->id?>"> <i class="fa fa-fw fa-pencil" title="Edit"></i></a> |  -->
                  <!-- <a href="<?php echo base_url().'upload_berkas/edit/'.$a->id_pendaftar?>"> <i class="fa fa-fw fa-pencil" title="Edit"></i></a> | 
                  <a href="<?php echo base_url().'user/detail_identitas/'.$a->id?>"> <i  class="fa fa-fw fa-eye" title="Detail"></i></a> 
                  </td> -->

              </tr>
              
<!--               <?php $i++;
               }?>
 -->
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
