
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>Absensi Guru Yayasan Ibnu-Sina 2019 </h1>
      <!-- <ol class="breadcrumb">

        <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?php echo base_url('auth/logout'); ?>" >Keluar</a></li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
             <div class="box-header"> 
              <a href="<?php echo base_url('admin/tambah_data_baru'); ?>"><button type="button" class="btn btn-primary">Tambah Data Absensi</button></a>

              <div class="navbar-form navbar-right">
                <?php echo form_open('admin/search') ?>
                <i title="Segarkan"><a  style="margin-top: 10px; margin-right: 10px;"  class="fa fa-refresh " href="<?php echo base_url('admin/lihat_data_absensi'); ?>"></a></i>
                <input type="text" name="keyword" class="form-control" placeholder="Cari..">
                <button type="submit" class="btn btn-success">Cari</button>
                <?php echo form_close(); ?>
              </div>
              <div>
                <!-- search form -->
      
      <!-- /.search form -->
              </div>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <div class="col-xs-12 col-lg-12">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <tr>
                      <th rowspan="2" style="font-size: 11px">Pilihan</th>
                      <th rowspan="2" style="font-size: 11px">No</th>
                      <!-- <th style="font-size: 11px" colspan="3" >Minggu</th> -->
                      <th rowspan="2" style="font-size: 11px">NAMA</th>
                      <th rowspan="2" style="font-size: 11px">MP</th>
                      <th rowspan="2" style="font-size: 11px">TINGKAT</th>
                      <th rowspan="2" style="font-size: 11px">KELAS</th>
                      <th style="font-size: 11px" colspan="3">MINGGU 1</th>
                      <th style="font-size: 11px" colspan="3">MINGGU 2</th>
                      <th style="font-size: 11px" colspan="3">MINGGU 3</th>
                      <th style="font-size: 11px" colspan="3">MINGGU 4</th>
                      <th style="font-size: 11px" colspan="3">MINGGU 5</th>
                      <th rowspan="2" style="font-size: 11px">TOTAL TMS</th>
                      <th rowspan="2" style="font-size: 11px">TOTAL TMH</th>
                      <th rowspan="2" style="font-size: 11px">TOTAL INFAL</th>
                      <th rowspan="2" style="font-size: 11px">TOTAL Kehadiran</th>
                      <th rowspan="2" style="font-size: 11px">TOTAL KEHADIRAN INFAL</th>
                      <th rowspan="2" style="font-size: 11px">TOTAL TIDAK MASUK</th>
                      
                    </tr>
                    <tr>
                      <!-- m1 -->
                      <th rowspan="2" style="font-size: 11px">TMS</th>
                      <th rowspan="2" style="font-size: 11px">TMH</th>
                      <th rowspan="2" style="font-size: 11px">INFAL</th>
                      <!-- m2 -->
                      <th rowspan="2" style="font-size: 11px">TMS</th>
                      <th rowspan="2" style="font-size: 11px">TMH</th>
                      <th rowspan="2" style="font-size: 11px">INFAL</th>
                      <!-- m3 -->
                      <th rowspan="2" style="font-size: 11px">TMS</th>
                      <th rowspan="2" style="font-size: 11px">TMH</th>
                      <th rowspan="2" style="font-size: 11px">INFAL</th>
                      <!-- m4 -->
                      <th rowspan="2" style="font-size: 11px">TMS</th>
                      <th rowspan="2" style="font-size: 11px">TMH</th>
                      <th rowspan="2" style="font-size: 11px">INFAL</th>
                      <!-- m5 -->
                      <th rowspan="2" style="font-size: 11px">TMS</th>
                      <th rowspan="2" style="font-size: 11px">TMH</th>
                      <th rowspan="2" style="font-size: 11px">INFAL</th>
                    </tr>

                </thead>
                <tbody>

                  <?php $i = 1;

                  foreach ($tb_absensi as $a) { 
                 ?>

                <tr>
                  <!-- <input type="checkbox" class="delete_checkbox" value="'.$id.'" name="id">&nbsp;&nbsp; -->
                  <td style="font-size: 11px;" nowrap>
                  <a href="<?php echo base_url().'admin/edit_data_absensi/'.$a->id?>"> <i class="fa fa-fw fa-pencil" title="Edit"></i></a> |
                  <a href="<?php echo base_url().'admin/hapus_data_absensi/'.$a->id?>"> <i  class="fa fa-fw fa-trash" title="Hapus"></i></a>
                  
                  <!-- <a href="<?php //echo base_url().'laporanpdf' ?>"><button class="btn btn-primary">Cetak Pdf</button></a> -->
                  </td>
                  <td style="font-size: 11px;"><?php echo $i; ?></td>
                  <!-- <td nowrap><?php //echo $a->id_guru; ?></td> -->
                  <td style="font-size: 11px;" nowrap><?php echo $a->nama; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->mp; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->tingkat_mengajar; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->kelas; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->tms; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->tmh; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->infal; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->tms2; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->tmh2; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->infal2; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->tms3; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->tmh3; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->infal3; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->tms4; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->tmh4; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->infal4; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->tms5; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->tmh5; ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo $a->infal5; ?></td>
                  <!-- total tms tmh infal -->
                  
                  <td style="font-size: 11px;" nowrap><?php echo round($a->tms+$a->tms2+$a->tms3+$a->tms4+$a->tms5); ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo round($a->tmh+$a->tmh2+$a->tmh3+$a->tmh4+$a->tmh5); ?></td>
                  <td style="font-size: 11px;" nowrap><?php echo round($a->infal+$a->infal+$a->infal3+$a->infal4+$a->infal5); ?></td>

                  <!-- total kehadiran , kehadiran infal, tidak masuk  -->
                  <td style="font-size: 11px;" nowrap><?php echo round(($a->tmh+$a->tmh2+$a->tmh3+$a->tmh4+$a->tmh5) / ($a->tms+$a->tms2+$a->tms3+$a->tms4+$a->tms5)*100,1); ?> %</td>

                  <td style="font-size: 11px;" nowrap><?php echo round(($a->infal+$a->infal+$a->infal3+$a->infal4+$a->infal5) / ($a->tms+$a->tms2+$a->tms3+$a->tms4+$a->tms5)*100,1) ?> %</td>

                  <td style="font-size: 11px;" nowrap><?php echo round (100-($a->tmh+$a->tmh2+$a->tmh3+$a->tmh4+$a->tmh5) / ($a->tms+$a->tms2+$a->tms3+$a->tms4+$a->tms5)*100,1) + ($a->infal+$a->infal+$a->infal3+$a->infal4+$a->infal5) / ($a->tms+$a->tms2+$a->tms3+$a->tms4+$a->tms5) ?> %</td>
                 

              </tr>
              
              <?php $i++;
               }?>
               <tr><th rowspan style="font-size: 11px;">TOTAL : Bulan</th></tr>

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
