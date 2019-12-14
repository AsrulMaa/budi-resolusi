<style type="text/css">
  table,thead,tr,th{
    text-align: center;
    font-size: 10;
  },
  table,tbody,tr,td{
    text-align: center;
    font-size: 10;

  }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Absensi Guru Yayasan Ibnu-Sina 2019 <br>
      <small>Last Update : 
      <!-- <?php $i=1;
                foreach($tb_update2 as $a){?>
                      <tr>
                        <td style="font-size: 14px;"><?= $a->tgl_update; ?></td>
                      </tr>
      <?php $i++; } ?> -->
       <a href="#"><i class="fa fa-fw fa-pencil" title="Ubah Data Tanggal"></i></a></small>
    </h1>
    <!-- <h4>PROGRES AKUISI & ENTRY DATA</h4> -->
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i> Data Abensi Yayasan Ibnu - Sina 2019</li>
      <li>Lihat</li>
    </ol>
  </section>


    <!-- Main content -->
  <section class="content">
    
<!-- 
<div class="col-md-6">
          <div class="box">
    <div class="box-body">
              <table class="table table-bordered table-hover table-striped">
                   <?php
                          $total_tms = 0;
                          $total_tmh = 0;
                          $total_infal = 0;
                          $total_kehadiran = 0;
                          $total_kehadiran_infal = 0;
                          $total_tidak_masuk = 0;

                  foreach ($tb_absensi as $data) {
                    if ($total_tms == null) {
                      
                    }elseif ($total_tmh == null) {
                      
                    }elseif ($total_infal == null) {

                    }elseif ($total_kehadiran == null) {
                      
                    }elseif ($total_kehadiran_infal == null) {
                      
                    }elseif ($total_tidak_masuk == null) {
                    
                    }else{
                    $total_tms = sum($total_tms);
                    $total_tmh;
                    $total_infal;
                    $total_kehadiran = round(($total_tmh/$total_tms)*100,1);
                    $total_kehadiran_infal = round(($total_infal/$total_tms)*100,1);
                    $total_tidak_masuk = round(($total_kehadiran+$total_kehadiran_infal));
                  }
                  }
                  ?>
                  <h3 style="text-align: center;"><b>Total </b></h3>
                
                <tr>
                  <td>1.</td>
                  <td>Total TMS</td>
                  <td><span class="badge bg-green"><?php echo $total_tms ?>%</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Total TMH</td>
                  <td><span class="badge bg-yellow"><?php echo $total_tmh ?>%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Total INFAL</td>
                  <td><span class="badge bg-green"><?php echo $total_infal ?>%</span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>KEHADIRAN</td>
                  <td><span class="badge bg-orange"><?php echo $total_kehadiran ?>%</span></td>
                </tr>
                <tr>
                  <td>5.</td>
                  <td>Kehadiran INFAL</td>
                  <td><span class="badge bg-light-blue"><?php echo $total_kehadiran_infal ?>%</span></td>
                </tr>
                <tr>
                  <td>6.</td>
                  <td>Tidak Masuk</td>
                  <td><span class="badge bg-green"><?php echo $total_tidak_masuk ?>%</span></td>
                </tr>

              </table>
            </div>
          </div>
        </div> -->

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <!-- <a href="<?php //echo base_url('admin/tambah_data_absensi'); ?>"><button  type="button" class="btn btn-primary ">class="fa fa-download"<i class="fa fa-plus"  title="Tambah Data Timeline"></i>&nbsp;Tambah Data</button></a> -->
          </div>

          <div class="box-body">
            <div class="table-responsive">
              <div class="col-xs-12 col-lg-12">
                <table class="table  table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th rowspan="2" style="font-size: 12px">No</th>
                      <!-- <th style="font-size: 12px" colspan="3" >Minggu</th> -->
                      <th rowspan="2" style="font-size: 12px">NAMA</th>
                      <th rowspan="2" style="font-size: 12px">MP</th>
                      <th rowspan="2" style="font-size: 12px">TINGKAT</th>
                      <th rowspan="2" style="font-size: 12px">KELAS</th>
                      <!-- <th style="font-size: 12px">TMS</th>
                      <th style="font-size: 12px">TMH</th>
                      <th style="font-size: 12px">INFAL</th> -->
                      <th style="font-size: 12px" colspan="3">M</th>
                      <th style="font-size: 12px" colspan="3">M</th>
                      <th style="font-size: 12px" colspan="3">M</th>
                      <th style="font-size: 12px" colspan="3">M</th>
                      <th style="font-size: 12px" colspan="3">M</th>
                      <th rowspan="2" style="font-size: 12px">TOTAL TMS</th>
                      <th rowspan="2" style="font-size: 12px">TOTAL TMH</th>
                      <th rowspan="2" style="font-size: 12px">TOTAL INFAL</th>
                      <th rowspan="2" style="font-size: 12px">TOTAL Kehadiran</th>
                      <th rowspan="2" style="font-size: 12px">TOTAL KEHADIRAN INFAL</th>
                      <th rowspan="2" style="font-size: 12px">TOTAL TIDAK MASUK</th>
                      <th rowspan="2" style="font-size: 12px">PILIHAN</th>
                    </tr>
                    <tr>
                      <!-- m1 -->
                      <th rowspan="2" style="font-size: 12px">TMS</th>
                      <th rowspan="2" style="font-size: 12px">TMH</th>
                      <th rowspan="2" style="font-size: 12px">INFAL</th>
                      <!-- m2 -->
                      <th rowspan="2" style="font-size: 12px">TMS</th>
                      <th rowspan="2" style="font-size: 12px">TMH</th>
                      <th rowspan="2" style="font-size: 12px">INFAL</th>
                      <!-- m3 -->
                      <th rowspan="2" style="font-size: 12px">TMS</th>
                      <th rowspan="2" style="font-size: 12px">TMH</th>
                      <th rowspan="2" style="font-size: 12px">INFAL</th>
                      <!-- m4 -->
                      <th rowspan="2" style="font-size: 12px">TMS</th>
                      <th rowspan="2" style="font-size: 12px">TMH</th>
                      <th rowspan="2" style="font-size: 12px">INFAL</th>
                      <!-- m5 -->
                      <th rowspan="2" style="font-size: 12px">TMS</th>
                      <th rowspan="2" style="font-size: 12px">TMH</th>
                      <th rowspan="2" style="font-size: 12px">INFAL</th>
                    </tr>

                    
                  </thead>
                  <tbody>
                     <?php
                      $last_region = '';
                          $total_tms = 0;
                          $total_tmh = 0;
                          $total_infal = 0;
                          $total_tms2 = 0;
                          $total_tmh2 = 0;
                          $total_infal2 = 0;
                          $total_tms3 = 0;
                          $total_tmh3 = 0;
                          $total_infal3 = 0;
                          $total_tms4 = 0;
                          $total_tmh4 = 0;
                          $total_infal4 = 0;
                          $total_tms5 = 0;
                          $total_tmh5 = 0;
                          $total_infal5 = 0;
                          $total_kehadiran = 0;
                          $total_kehadiran_infal = 0;
                          $total_tidak_masuk = 0;
                      $no=1;

                      for ($i=0; $i < count($tb_absensi); $i++) 
                      {
                        if($i == 0)
                        {
                          $last_region = $tb_absensi[$i]['id_guru'];
                        } elseif ($i > 0 && $last_region <> $tb_absensi[$i]['id_guru']) 
                        {
                          
                          echo '<tr style="background:#cccccc;font-weight: bold;">
                                <td colspan="9" style="text-transform: capitalize; "> Total MINGGU 
                                <td>'.$total_tms.'</td>
                                <td>'.$total_tmh.'</td>
                                <td>'.$total_infal.'</td>
                                <td>'.$total_tms2.'</td>
                                <td>'.$total_tmh2.'</td>
                                <td>'.$total_infal2.'</td>
                                <td>'.$total_tms3.'</td>
                                <td>'.$total_tmh3.'</td>
                                <td>'.$total_infal3.'</td>
                                <td>'.$total_tms4.'</td>
                                <td>'.$total_tmh4.'</td>
                                <td>'.$total_infal4.'</td>
                                <td>'.$total_tms5.'</td>
                                <td>'.$total_tmh5.'</td>
                                <td>'.$total_infal5.'</td>
                                <td>'.round(($total_tmh/$total_tms)*100,1).'</td>
                                <td>'.round(($total_infal/$total_tms)*100,1).'</td>
                                <td>'.round(($total_kehadiran+$total_kehadiran_infal)).'</td>
                                
                              </tr>';
                          $last_region = $tb_absensi[$i]['id_guru'];
                          $total_tms = 0;
                          $total_tmh = 0;
                          $total_infal = 0;
                          $total_tms2 = 0;
                          $total_tmh2 = 0;
                          $total_infal2 = 0;
                          $total_tms3 = 0;
                          $total_tmh3 = 0;
                          $total_infal3 = 0;
                          $total_tms4 = 0;
                          $total_tmh4 = 0;
                          $total_infal4 = 0;
                          $total_tms5 = 0;
                          $total_tmh5 = 0;
                          $total_infal5 = 0;
                          $total_kehadiran = 0;
                          $total_kehadiran_infal = 0;
                          $total_tidak_masuk = 0;

                        } 

                        $total_tms += $tb_absensi[$i]['tms'];
                        $total_tmh += $tb_absensi[$i]['tmh'];
                        $total_infal += $tb_absensi[$i]['infal'];
                        $total_tms += $tb_absensi[$i]['tms2'];
                        $total_tmh += $tb_absensi[$i]['tmh2'];
                        $total_infal += $tb_absensi[$i]['infal2'];
                        $total_tms += $tb_absensi[$i]['tms3'];
                        $total_tmh += $tb_absensi[$i]['tmh3'];
                        $total_infal += $tb_absensi[$i]['infal3'];
                        $total_tms += $tb_absensi[$i]['tms4'];
                        $total_tmh += $tb_absensi[$i]['tmh4'];
                        $total_infal += $tb_absensi[$i]['infal4'];
                        $total_tms += $tb_absensi[$i]['tms5'];
                        $total_tmh += $tb_absensi[$i]['tmh5'];
                        $total_infal += $tb_absensi[$i]['infal5'];
                        $total_kehadiran += $tb_absensi[$i]['kehadiran'];
                        $total_kehadiran_infal += $tb_absensi[$i]['kehadiran_infal'];
                        $total_tidak_masuk += $tb_absensi[$i]['tidak_masuk'];
                        
                        echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$last_region.'</td>
                                <td>'.$tb_absensi[$i]['nama'].'</td>
                                <td>'.$tb_absensi[$i]['mp'].'</td>
                                <td>'.$tb_absensi[$i]['tingkat_mengajar'].'</td>
                                <td>'.$tb_absensi[$i]['kelas'].'</td>
                                <td>'.$tb_absensi[$i]['tms'].'</td>
                                <td>'.$tb_absensi[$i]['tmh'].'</td>
                                <td>'.$tb_absensi[$i]['infal'].'</td>
                                <td>'.$tb_absensi[$i]['tms2'].'</td>
                                <td>'.$tb_absensi[$i]['tmh2'].'</td>
                                <td>'.$tb_absensi[$i]['infal2'].'</td>
                                <td>'.$tb_absensi[$i]['tms3'].'</td>
                                <td>'.$tb_absensi[$i]['tmh3'].'</td>
                                <td>'.$tb_absensi[$i]['infal3'].'</td>
                                <td>'.$tb_absensi[$i]['tms4'].'</td>
                                <td>'.$tb_absensi[$i]['tmh4'].'</td>
                                <td>'.$tb_absensi[$i]['infal4'].'</td>
                                <td>'.$tb_absensi[$i]['tms5'].'</td>
                                <td>'.$tb_absensi[$i]['tmh5'].'</td>
                                <td>'.$tb_absensi[$i]['infal5'].'</td>
                                <td>'.$total_tms.'</td>
                                <td>'.$total_tmh.'</td>
                                <td>'.$total_infal.'</td>
                                <td>'.round(($total_tmh/$total_tms)*100,1).' %</td>
                                <td>'.round(($total_infal /$total_tms)*100,1).' %</td>
                                <td>'.round(100-($tb_absensi[$i]['kehadiran']+$tb_absensi[$i]['kehadiran_infal'])).' %</td>

                                <td>
                                  <a href="'.base_url().'admin/edit_data_absensi/'.$tb_absensi[$i]['id'].'"> <i class="fa fa-fw fa-pencil" title="Ubah Data Absensi"></i></a> |
                                  <a href="'.base_url().'admin/hapus_data_absensi/'.$tb_absensi[$i]['id'].'"> <i  class="fa fa-fw fa-trash" title="Hapus Data Absensi"></i></a>
                                </td>
                              </tr>'; 
                        $no++;
                        if($i+1 == count($tb_absensi))
                        {
                           echo '<tr style="background:#cccccc;font-weight: bold;">
                                <td colspan="9" style="text-transform: capitalize; "> Total MINGGU KE : '.$last_region.'</td>
                                
                                <td>'.$total_tms.'</td>
                                <td>'.$total_tmh.'</td>
                                <td>'.$total_infal.'</td>
                                <td>'.round(($total_tmh/$total_tms)*100,1).'</td>
                                <td>'.round(($total_infal/$total_tms)*100,1).'</td>
                                <td>'.round(($total_kehadiran+$total_kehadiran_infal)).'</td>
                                
                              </tr>';
                        }

                      }
                    ?>

                  </tbody>
                </table>
          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
