<?php echo view ('parsial/header'); ?>
<?php echo view ('parsial/sidebar'); ?>
<!-- Font Awesome -->
<link href="<?php echo base_url('/public/theme');?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Dashboard</h3>
            </div>
            <div class="clearfix"></div>
            <div class="row">  
                <div class="col-md-12">
                    <div class="">
                        <div class="x_content">
                            <div class="row">
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="count">0</div>
                                        <h3>Data Surat Masuk</h3>
                                        <p><a href="<?php echo base_url('SuratMasuk/datasurat'); ?>">More data...</a></p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-user"></i>
                                        </div>
                                        <div class="count">0</div>
                                        <h3>User Online</h3>
                                        <p><a href="">More data...</a></p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-inbox"></i>
                                        </div>
                                        <div class="count">0</div>
                                        <h3>Data Arsip</h3>
                                        <p><a href="">More data...</a></p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-envelope-o"></i>
                                        </div>
                                        <div class="count">0</div>
                                        <h3>Data Surat Keluar</h3>
                                        <p><a href="">More data...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Selamat Datang</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                        role="button" aria-expanded="false"><i
                                                            class="fa fa-wrench"></i></a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Settings 1</a>
                                                        <a class="dropdown-item" href="#">Settings 2</a>
                                                    </div>
                                                </li>
                                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <p>Selamat Datang di Sistem Pengarsipan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo view("parsial/footer"); ?>
    