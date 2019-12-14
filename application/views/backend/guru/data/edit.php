      <div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="row">
        <div class="col-md-6">
          <?php echo $this->session->flashdata('sukses'); ?>
        </div>
      </div>
      <div class="col-md-7 ">
        <!-- Profile Image -->

          <div class="box box-primary">

            <div class="box-body box-profile ">
<!-- 
                    <?php  
          foreach ($t_pendaftar_sd as $a ){ 
        ?> -->
                <!-- <form class="form-horizontal"> -->
                  <?php echo form_open('upload_berkas/simpan_edit/'.$a->id_pendaftar, ['method' => 'POST', 'enctype' => 'multipart/form-data']);?>
                    <img style="margin-left: 350px;" class="profile-user-img img-responsive img-circle" src="<?php echo base_url('upload/photo/').$a->foto; ?>" alt="User profile picture" >
                     
                    <?php    
                        $csrf = array(
                              'name' => $this->security->get_csrf_token_name(),
                              'hash' => $this->security->get_csrf_hash());
                    ?>
                  <div class="form-group">
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                  </div>

                  <div class="form-group">
                    <label for="inputNama" class="col-sm-4 control-label" >Nama</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputNama" placeholder="Nama" name="nama" value="<?php echo $a->nama; ?>"  >
                      <?php echo form_error('nama'); ?>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputNama" class="col-sm-4 control-label" >Alamat</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputName" placeholder="Name" name="alamat" value="<?php echo $a->alamat; ?>"  >
                      <?php echo form_error('alamat'); ?>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputJenisKelamin" class="col-sm-4 control-label" >JK</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputJenisKelamin" placeholder="Jenis Kelamin" name="jenis_kelamin" value="<?php echo $a->jenis_kelamin; ?>"  >
                      <?php echo form_error('jenis_kelamin'); ?>
                    </div>
                  </div><br>


                  <div class="form-group">
                    <label for="inputTempat" class="col-sm-4 control-label" >Tempat Lahir</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputTempat" placeholder="Tempat" name="tempat" value="<?php echo $a->tempat; ?>"  >
                      <?php echo form_error('tempat'); ?>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputTanggalLahir" class="col-sm-4 control-label" >Tgl. Lahir</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputTanggalLahir" placeholder="Tanggal Lahir" name="tanggal" value="<?php echo $a->tanggal; ?>"  >
                      <?php echo form_error('tanggal'); ?>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputBulanLahir" class="col-sm-4 control-label" >Bulan Lahir</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputBulanLahir" placeholder="Bulan Lahir" name="bulan" value="<?php echo $a->bulan; ?>"  >
                      <?php echo form_error('bulan'); ?>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputTahunLahir" class="col-sm-4 control-label" >Tahun Lahir</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputTahun" placeholder="Tahun Lahir" name="tahun" value="<?php echo $a->tahun; ?>"  >
                      <?php echo form_error('tahun'); ?>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputAgama" class="col-sm-4 control-label" >Agama</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputAgama" placeholder="Agama" name="agama" value="<?php echo $a->agama; ?>"  >
                      <?php echo form_error('agama'); ?>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputAsalNegara" class="col-sm-4 control-label" >Asal Negara</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputAsalNegara" placeholder="Asal Negara" name="asal_negara" value="<?php echo $a->asal_negara; ?>"  >
                      <?php echo form_error('asal_negara'); ?>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputAkta" class="col-sm-4 control-label" >Nomor Akta</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputAkta" placeholder="Nomor Akta" name="akta" value="<?php echo $a->akta; ?>"  >
                      <?php echo form_error('akta'); ?>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputNik" class="col-sm-4 control-label" >Nomor Nik</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputNik" placeholder="Nomor Nik" name="nik" value="<?php echo $a->nik; ?>"  >
                      <?php echo form_error('nik'); ?>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputNamaAyah" class="col-sm-4 control-label" >Nama Ayah</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputNamaAyah" placeholder="Nama Ayah" name="nama_ayah" value="<?php echo $a->nama_ayah; ?>"  >
                      <?php echo form_error('nama_ayah'); ?>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputNamaIbu" class="col-sm-4 control-label" >Nama Ibu</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputNamaIbu" placeholder="Nama Ibu" name="nama_ibu" value="<?php echo $a->nama_ibu; ?>"  >
                      <?php echo form_error('nama_ibu'); ?>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputNoTelepon" class="col-sm-4 control-label" >No. Telepon</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputNoTelepon" placeholder="No Telepon" name="no_telp" value="<?php echo $a->no_telp; ?>"  >
                      <?php echo form_error('no_telp'); ?>
                    </div>

                  </div><br>
                  
                  <div class="form-group">
                    <label for="inputFoto" class="col-sm-4 control-label"></label>
                    <div class="col-sm-8">
                      <input type="file" name="foto">
                    </div>
                  </div>
                  <br>
                  
                  <div>
                    <label class="col-md-4"></label>
                      <div class="col-md-8">
                        <input type="submit" name="submit" class="btn btn-primary" value="simpan">
                      </div>   
                  </div>  
                  <?php echo form_close(); ?>
            </div>
            <!-- <?php } ?> -->
            

            <!-- /.box-body -->
          </div>
          <!-- /.box -->


  </section>
</div>
