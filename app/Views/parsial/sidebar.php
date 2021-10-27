  <!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
              <li><a href=<?php echo base_url('home/dashboard');?>><i class="fa fa-dashboard"></i> Dashboard</a>
              </li>
              <li><a><i class="fa fa-edit"></i> Pengarsipan<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href=<?php echo base_url('SuratMasuk/datasurat');?>><i class="fa fa-envelope"></i>Data
                              Surat Masuk</a></li>
                      <li><a href=<?php echo base_url('SuratKeluar/datasuratkeluar');?>><i
                                  class="fa fa-envelope-o"></i>Data Surat Keluar</a></li>
                  </ul>
              </li>
              <li><a href="#"><i class="fa fa-inbox"></i> Data Arsip<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('ArsipMasuk/dataarsipmasuk'); ?>"><i
                                  class="fa fa-folder"></i>Arsip Masuk</a></li>
                      <li><a href="<?php echo base_url('ArsipKeluar/dataarsipkeluar'); ?>"><i
                                  class="fa fa-folder-o"></i>Arsip Keluar</a></li>
                  </ul>
              </li>
              <li><a href=<?php echo base_url('Kategori/datakategori');?>><i class="fa fa-bookmark"></i> Kategori</a>
              </li>


      </div>


  </div>
  <!-- /menu footer buttons -->
  </div>
  </div>
  <!-- top navigation -->
  <div class="top_nav">
      <div class="nav_menu">
          <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                      <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                          id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                          <?php $session = session() ?>
                          <img src="<?php echo base_url('theme');?>/production/images/user.png"
                              alt=""><?php echo $session->get('username')?>
                      </a>
                      <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                          <?php if (session()->get('role')=='admin') { ?>
                          <a class="dropdown-item" href=<?php echo base_url('/kelolauser/datauser'); ?>><i
                                  class="fa fa-user pull-right"></i> Kelola User </a>
                          <?php } ?>
                          <a class="dropdown-item" href=<?php echo base_url('/auth/logout'); ?>><i
                                  class="fa fa-sign-out pull-right"></i> Logout</a>
                      </div>
                      <!--<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href=<?php //echo base_url('/auth/login'); ?>><i
                                  class="fa fa-sign-in pull-right"></i> Login</a>
                      </div>!-->
                  </li>


              </ul>
          </nav>
      </div>
  </div>

  <!-- /top navigation -->