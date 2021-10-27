<?php echo view ('parsial/header'); ?>
<?php echo view ('parsial/sidebar'); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data Surat Masuk</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" name="cari" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-outline-secondary" type="submit">Go!</button>
                            </span>
                        </div>
                </div>
            </div>
            </form>
            <div class="clearfix"></div>
            <div class="row">
                <div class="x_content">
                    <div class="table-responsive">
                        <?php if (session()->get('role')=='admin') { ?>
                        <a href="<?php echo base_url('SuratMasuk/input'); ?>"
                            class="btn btn-primary btn-icon-split btn-sm">
                            <span class="icon text-white-50"><i class="fa fa-plus"></i></span>
                            <span class="text">Tambahkan Data</span></a>
                        <?php } ?>
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">ID Surat</th>
                                    <th class="column-title">No.Surat</th>
                                    <th class="column-title">Tanggal Surat</th>
                                    <th class="column-title">Perihal</th>
                                    <th class="column-title">Pengirim</th>
                                    <th class="column-title">Status</th>
                                    <th class="column-title">Ketegori</th>
                                    <th class="column-title">Keterangan</th>
                                    <th class="column-title">File</th>
                                    <th class="column-title no-link last"><span class="nobr">
                                            <?php if (session()->get('role')=='admin') { ?>
                                            Action</span>
                                        <?php } ?>
                                    </th>
                                </tr>
                            <tbody>
                                <?php foreach ($joinsuratmasukxkategori as $x):  ?>
                                <tr class="even pointer">
                                    <td><?php echo $x['id_surat'];?></td>
                                    <td><?php echo $x['no_surat'];?></td>
                                    <td><?php echo $x['tgl_surat'];?></td>
                                    <td><?php echo $x['perihal'];?></td>
                                    <td><?php echo $x['pengirim'];?></td>
                                    <td><?php echo $x['status'];?></td>
                                    <td><?php echo $x['nama_kategori'];?></td>
                                    <td><?php echo $x['keterangan'];?></td>
                                    <td><a
                                            href="<?=base_url() . "/file_upload/" .$x['file'];?>"><?php echo $x['file'];?></a>
                                    </td>
                                    <td>
                                        <?php if (session()->get('role')=='admin') { ?>
                                        <div class="btn-group">
                                            <a href="edit/<?php echo $x['id_surat']; ?>"
                                                class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="hapus/<?php echo $x['id_surat']; ?>" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Anda yakin mau menghapus data ini?');"><i
                                                    class="fa fa-trash"></i></a>
                                            <?php } ?>
                                    </td>
                                </tr>

                                <?php endforeach; ?>
                                </thead>
                        </table>
                        <?php //echo $pager->links('suratmasuk_pages', 'pagination_custom'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view ('parsial/footer'); ?>