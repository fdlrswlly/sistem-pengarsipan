<?php echo view ('parsial/header'); ?>
<?php echo view ('parsial/sidebar'); ?>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme');?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Input Kategori</h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Masukkan Data Kategori</h2>
                
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="<?php echo base_url()?>/Kategori/simpan" method="post" enctype="multipart/form-data">
                    <!--<div class="card-body">
                        <div class="form-group">
                            <label>No. Surat <span class="required">*</span></label>
                            <input type="hidden" class="form-control" name="id_surat" placeholder="Masukan Nomor Surat">
                            <?php //echo $pesan_validasi->getError('id_surat');?>
                        </div>!-->
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Kategori <span class="required">*</span></label>
                            <input type="text" class="form-control" name="nama_kategori" placeholder="Masukan Nama Kategori">
                            <?php echo $pesan_validasi->getError('nama_kategori');?>
                        </div>
                        </div>
                        
</br>
<div class="ln_solid"></div>
<div class="form-group">
<a href="./datakategori" class="btn btn-warning">Cancel</a>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</div>

                
               
            </div>
        </div>
        <?php echo view ('parsial/footer'); ?>
        