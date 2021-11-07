<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('assets/');?>index3.html" class="brand-link elevation-4">
        <img src="<?=base_url('uploads/'._profil()->logo);?>" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">PPDB PAUD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=base_url('uploads/'._profil()->logo);?>" class="img-circle elevation-3" height="100"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $this->session->userdata('fullname'); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?=base_url('menu');?>" class="nav-link <?=isset($mDashboard)?'active':'';?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <?php if($this->session->userdata('level')=='Admin'): ?>
                <li class="nav-item">
                    <a href="<?=base_url('menu/profil_sekolah');?>" class="nav-link <?=isset($mProfil)?'active':'';?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Profil Sekolah
                        </p>
                    </a>
                </li>
                <?php endif; ?>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link <?=isset($mSiswa)?'active':'';?>">
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>
                            Data Siswa
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=base_url('menu/orang_tua');?>"
                                class="nav-link <?=isset($mOrangtua)?'active':'';?>">
                                <i class="fas fa-chevron-right nav-icon"></i>
                                <p>Orang Tua</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url('menu/biodata_anak');?>"
                                class="nav-link <?=isset($mBiodata)?'active':'';?>">
                                <i class="fas fa-chevron-right nav-icon"></i>
                                <p>Biodata Anak</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php if($this->session->userdata('level')=='Admin'): ?>
                <li class="nav-item">
                    <a href="<?=base_url('menu/seleksi');?>" class="nav-link  <?=isset($mSeleksi)?'active':'';?>">
                        <i class="nav-icon fas fa-check"></i>
                        <p>
                            Seleksi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=base_url('menu/pengguna');?>" class="nav-link  <?=isset($mPengguna)?'active':'';?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Pengguna
                        </p>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!--
 /.sidebar -->
</aside>
