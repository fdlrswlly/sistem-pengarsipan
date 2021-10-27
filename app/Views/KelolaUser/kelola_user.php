<?php echo view ('parsial/header'); ?>
<?php echo view ('parsial/sidebar'); ?>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme');?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Kelola User</h3>
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
                        <a href="<?php echo base_url('/KelolaUser/input'); ?>"
                            class="btn btn-primary btn-icon-split btn-sm">
                            <span class="icon text-white-50"><i class="fa fa-plus"></i></span>
                            <span class="text">Tambah User</span></a>
                        <?php } ?>
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">ID User</th>
                                    <th class="column-title">Email</th>
                                    <th class="column-title">Username</th>
                                    <th class="column-title">Level</th>
                                    <th class="column-title no-link last"><span class="nobr">
                                            <?php if (session()->get('role')=='admin') { ?>
                                            Action</span>
                                        <?php } ?>
                                    </th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                                class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                            <tbody>
                                <?php foreach ($datauser as $x): ?>
                                <tr class="even pointer">
                                    <td><?php echo $x['id'];?></td>
                                    <td><?php echo $x['email'];?></td>
                                    <td><?php echo $x['username'];?></td>
                                    <td><?php echo $x['role'];?></td>
                                    <td>
                                        <?php if (session()->get('role')=='admin') { ?>
                                        <div class="btn-group">
                                            <a href="edit/<?php echo $x['id']; ?>" class="btn btn-primary btn-sm"><i
                                                    class="fa fa-edit"></i></a>
                                            <a href="hapus/<?php echo $x['id']; ?>" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Anda yakin mau menghapus data ini?');"><i
                                                    class="fa fa-trash"></i></a>
                                            <?php } ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                </thead>
                        </table>
                        <?php //echo $pager->links('kelolauser_pages', 'pagination_custom'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view ('parsial/footer'); ?>