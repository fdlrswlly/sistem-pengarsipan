<?php echo view ('parsial/header'); ?>
<?php echo view ('parsial/sidebar'); ?>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme');?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Tambah User</h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Masukkan Pengguna Baru</h2>
                
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="<?php echo base_url()?>/KelolaUser/simpan/" method="post" enctype="multipart/form-data">
                    <!--<div class="card-body">
                        <div class="form-group">
                            <label>No. Surat <span class="required">*</span></label>
                            <input type="hidden" class="form-control" name="id_surat" placeholder="Masukan Nomor Surat">
                            <?php //echo $pesan_validasi->getError('id_surat');?>
                        </div>!-->
                    <div class="card-body">
                        <div class="form-group">
                            <label>Email <span class="required">*</span></label>
                            <input type="text" class="form-control" name="email" placeholder="Masukan Email">
                            <?php //echo $pesan_validasi->getError('email');?>
                        </div>
                        <div class="form-group">
                            <label>Username<span class="required">*</span></label>
                            <input type="text" class="form-control" name="username" placeholder="Masukan Username">
                            <?php //echo $pesan_validasi->getError('username');?>
                        </div>
                        <div class="form-group">
                            <label>Password<span class="required">*</span></label>
                            <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                        <?php // echo $pesan_validasi->getError('perihal');?>
                        </div>
                        <div class="form-group">
                            <label>Level<span class="required">*</span></label>
                            <select class="form-control" name="role">
                                    <option>Choose option level</option>
                                    <option>Admin</option>
                                    <option>User</option>
                                </select>
                                <?php //echo $pesan_validasi->getError('role');?>
                        </div>
</br>
<div class="ln_solid"></div>
<div class="form-group">
<a href="./datauser" class="btn btn-warning">Cancel</a>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</div>

                
               
            </div>
        </div>
        <?php echo view ('parsial/footer'); ?>
        