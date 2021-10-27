<?php echo view ('parsial/header'); ?>
<?php echo view ('parsial/sidebar'); ?>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme');?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Surat Masuk</h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Ubah Data Surat Masuk</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                            <form action="<?php echo base_url()?>/SuratMasuk/proses_edit/<?php echo $x['id_surat'] ;?>"
                             method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id"
                                            value="<?php echo $x['id_surat']; ?>">
                                        <?php //echo $pesan_validasi->getError('id');?>
                                    </div>
                                    <div class="form-group">
                                        <label>No. Surat <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="no_surat"
                                           value="<?php echo $x['no_surat']; ?>">
                                        <?php //echo $pesan_validasi->getError('no_surat');?>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Surat</label>
                                        <input type="date" class="form-control" name="tgl_surat"
                                           value="<?php echo $x['tgl_surat']; ?>">
                                        <?php //echo $pesan_validasi->getError('tgl_surat');?>
                                    </div>
                                    <div class="form-group">
                                        <label>Perihal</label>
                                        <input type="text" class="form-control" name="perihal"
                                        value="<?php echo $x['perihal']; ?>">
                                        <?php //echo $pesan_validasi->getError('perihal');?>
                                    </div>
                                    <div class="form-group">
                                        <label>Pengirim</label>
                                        <input type="text" class="form-control" name="pengirim"
                                        value="<?php echo $x['pengirim']; ?>">
                                        <?php //echo $pesan_validasi->getError('pengirim');?>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option>Choose option</option>
                                            <option>Menunggu Konfirmasi</option>
                                            <option>Belum Dibaca</option>
                                            <option>Sudah Dibaca</option>
                                        </select>
                                        <?php //echo $pesan_validasi->getError('status');?>
                                    </div>
                                     <div class="form-group">
                        <label >Kategori</label>
                        <select class="form-control" name="kategori">
                        <option value ="" disabled selected>Pilih</option>
                        <?php 

                          foreach($dropdown as $row)
                         { ?>
                            <option value="<?= $row['id_kategori'];   ?>"><?= $row['nama_kategori']; ?> </option>
                            <?php  }
                           ?>
                        </select>
                      </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="text" class="form-control" name="keterangan"
                                        value="<?php echo $x['keterangan']; ?>">
                                        <?php //echo $pesan_validasi->getError('pengirim');?>
                                    </div>
                                    <div class="form-group">
                                        <label>File<span class="required">*</span>
                                        </label>
                                        <input class="form-control" type="file" name="file" onchange="ambilNama()">
                                        <div class="invalid-feedback">
                                        </div>
                                        </br>
                                        <div class="form-group">
                                        <a href="/SuratMasuk/datasurat" class="btn btn-warning">Cancel</a>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                            </form>
                        </div>



                    </div>
                </div>
                <?php echo view ('parsial/footer'); ?>