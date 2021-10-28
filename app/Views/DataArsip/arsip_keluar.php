<?php echo view ('parsial/header'); ?>
<?php echo view ('parsial/sidebar'); ?>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme');?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Arsip Masuk</h3>
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
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">Id Surat</th>
                                    <th class="column-title">File</th>
                                </tr>
                            <tbody>
                                <?php foreach ($dataArsipKeluar as $x): ?>
                                <tr class="even pointer">
                                    <td><?php echo $x['id_surat']; ?></td>
                                    <td><a
                                            href="<?=base_url()."/file_upload/".$x['file'];?>"><?php echo $x['file'];?></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </thead>
                        </table>
                        <?php //echo $pager->links('arsipkeluar_pages', 'pagination_custom'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('parsial/footer'); ?>