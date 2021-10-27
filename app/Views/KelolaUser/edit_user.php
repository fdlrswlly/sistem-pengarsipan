<?php echo view ('parsial/header'); ?>
<?php echo view ('parsial/sidebar'); ?>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme');?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit User</h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Ubah User</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="/KelolaUser/proses_edit/<?php echo $x['id'] ;?>" method="post">
                                <!--<div class="card-body">
                                    <div class="form-group">
                                        <label>Id Surat <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="id"
                                            value="<?php //echo $x['id']; ?>">
                                        <?php //echo $pesan_validasi->getError('id');?>
                                    </div>!-->
                                    <div class="form-group">
                                        <label>E-Mail <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="email"
                                           value="<?php echo $x['email']; ?>">
                                        <?php //echo $pesan_validasi->getError('no_surat');?>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username"
                                           value="<?php echo $x['username']; ?>">
                                        <?php //echo $pesan_validasi->getError('tgl_surat');?>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password"
                                        value="<?php echo $x['password']; ?>">
                                        <?php //echo $pesan_validasi->getError('perihal');?>
                                    </div>
                                    <div class="form-group">
                            <label>Level<span class="required">*</span></label>
                            <select class="form-control" name="role" value="<?php echo $x['role']; ?>">
                                    <option>Choose option</option>
                                    <option>Admin</option>
                                    <option>User</option>
                                </select>
                                <?php //echo $pesan_validasi->getError('status');?>
                        </div>
                                        </br>
                                        <div class="form-group">
                                            <button ref=<?php echo base_url('SuratMasuk/datasurat');?>
                                                class="btn btn-primary" type="button">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                            </form>
                        </div>



                    </div>
                </div>
                <?php echo view ('parsial/footer'); ?>