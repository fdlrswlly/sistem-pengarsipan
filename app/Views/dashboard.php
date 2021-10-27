<?php echo view ('parsial/header'); ?>
<?php echo view ('parsial/sidebar'); ?>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme');?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<div class="right_col" role="main">
    <!-- page content -->
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
                                        <div class="count"><?= $total_surat_masuk; ?></div>
                                        <h3>Data Surat Masuk</h3>
                                        <p><a href="<?php echo base_url('SuratMasuk/datasurat');?>">More data...</a></p>
                                    </div>

                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-folder-o"></i>
                                        </div>
                                        <div class="count"><?= $total_arsip_keluar; ?></div>
                                        <h3>Arsip Keluar</h3>
                                        <p><a href="<?php echo base_url('ArsipKeluar/dataarsipkeluar');?>">More
                                                data...</a></p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-folder"></i>
                                        </div>
                                        <div class="count"><?= $total_arsip_masuk; ?></div>
                                        <h3>Arsip Masuk</h3>
                                        <p><a href="<?php echo base_url('ArsipMasuk/dataarsipmasuk');?>">More
                                                data...</a></p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-envelope-o"></i>
                                        </div>
                                        <div class="count"><?= $total_surat_keluar; ?></div>
                                        <h3>Data Surat Keluar</h3>
                                        <p><a href="<?php echo base_url('SuratKeluar/datasuratkeluar');?>">More
                                                data...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Selamat Datang</h2>

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
        </div>
    </div>
</div>
<?php echo view("parsial/footer"); ?>

<?php
$session = session(); 
if(!$session->get('role'))
{
    echo base_url('Home/dashboard');
}
else
{
    echo base_url('Auth/login');
}
?>