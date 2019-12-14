

    <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        
                <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-circle-o"></i> <span>Beranda</span></a></li>
                <!-- <li><a href="<?php echo base_url('admin/lihat_profil'); ?>"><i class="fa fa-user"></i> <span>profil</span></a></li> -->

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-folder"></i>
                    <span>Berkas</span>
                    <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('admin/lihat_data_guru'); ?>"><i class="fa fa-circle-o"></i>Data Guru</a></li>
                    <li><a href="<?php echo base_url('admin/lihat_data_absensi'); ?>"><i class="fa fa-circle-o"></i>Data Absensi</a></li>
                    <!-- <li><a href="#"><i class="fa fa-circle-o"></i>Jadwal Guru</a></li> -->
                  </ul>
                </li>


                <!-- <li><a href="#"><i class="fa fa-warning text-red"></i> <span>Laporan </span></a></li>   -->

<!-- 
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span>Pesan</span>
                    <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    <ul class="treeview-menu">
                      <li><a href="<?php echo base_url('admin/lihat_pesan') ?>"><i class="fa fa-circle-o"></i>Pesan Guru</a></li>
                    </ul>
                  </a>
                </li>
 -->

                <li><a href="<?php echo base_url('auth/logout'); ?>"><i class="fa fa-sign-out text-red"></i> <span>Logout</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
