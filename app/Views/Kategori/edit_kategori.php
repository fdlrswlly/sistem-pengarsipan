<?php echo view ('parsial/header'); ?>
<?php echo view ('parsial/sidebar'); ?>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme');?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Kategori</h3>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Ubah Data Kategori</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="<?php echo base_url()?>/Kategori/proses_edit/<?php echo $x['id_kategori'] ;?>"
                                method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id_kategori"
                                            value="<?php echo $x['id_kategori']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Kategori<span class="required">*</span></label>
                                        <input type="text" class="form-control" name="nama_kategori"
                                            value="<?php echo $x['nama_kategori']; ?>">
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <button ref=<?php echo base_url('../datakategori');?> class="btn btn-primary"
                                            type="button">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php echo view ('parsial/footer'); ?>