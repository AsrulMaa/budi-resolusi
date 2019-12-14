      <div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="row">
        <div class="col-md-6">
          <?php echo $this->session->flashdata('sukses'); ?>
        </div>
      </div>
      <div class="col-md-6 ">
        <!-- Profile Image -->

          <div class="box box-primary">
            <div class="box-body box-profile ">
            
                <!-- <form class="form-horizontal"> -->
                  <?php echo form_open_multipart('user/simpanprofil');?>
                    <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/pendaftar/').$users['image']; ?>" alt="User profile picture" >


                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" >Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="<?= $users['name']; ?>"  readonly>
                      <?php echo form_error('name'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="<?= $users['email']; ?>" readonly>
                      
                    </div>
                  </div>
                  
                </form>

                
              <a href="<?php echo base_url('user/editprofil'); ?>"><button type="submit" class="btn btn-primary btn-block">Edit</button></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


  </section>
</div>
