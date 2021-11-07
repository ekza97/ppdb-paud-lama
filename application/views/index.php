<?php $this->load->view('_partials/header.php'); ?>

<body class="hold-transition sidebar-mini layout-navbar-fixed">
    <?php if($this->session->flashdata('success')):?>
    <div class="flash-data-berhasil" data-berhasil="<?= $this->session->flashdata('success'); ?>"></div>
    <?php endif;?>
    <?php if($this->session->flashdata('error')):?>
    <div class="flash-data-gagal" data-gagal="<?= $this->session->flashdata('error'); ?>"></div>
    <?php endif;?>
    <!-- Site wrapper -->
    <div class="wrapper">

        <?php $this->load->view('_partials/navbar.php'); ?>

        <?php $this->load->view('_partials/sidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php $this->load->view($content); ?>
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; PPDB <?= date('Y'); ?> | <?= _profil()->nama; ?>
        </footer>

        <!-- Ganti Password Modal-->
        <div class="modal fade" id="changepasswordModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="dialog">
                <div class="modal-content">
                    <form action="<?=base_url('menu/ubah_password');?>" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="password">Password Baru</label>
                                <input type="hidden" name="id" value="<?=$this->session->userdata('id');?>">
                                <input type="password" class="form-control" id="password" name="password"
                                    aria-describedby="importInfo" autofocus required>
                                <!-- <small id="importInfo" class="form-text text-muted">Tipe foto yang di izinkan <b>.xlsx</b>,
								Ukuran maksimum file <b>2 MB</b>.</small> -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal"><i
                                    class="fas fa-times"></i> Batal</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-key"></i> Ganti
                                Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('_partials/footer.php'); ?>