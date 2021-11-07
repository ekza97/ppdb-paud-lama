<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Orang Tua "<?= $row['ayah_nama'].' & '.$row['ibu_nama']; ?>"</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Detail Orang Tua</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?=base_url('menu/orang_tua');?>" class="btn btn-sm btn-primary"><i
                                class="fas fa-chevron-left"></i> Kembali</a>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-2 text-right">Nama Ayah</dt>
                            <dd class="col-sm-4">: <?= $row['ayah_nama']; ?></dd>
                            <dt class="col-sm-2 text-right">Nama Ibu</dt>
                            <dd class="col-sm-4">: <?= $row['ibu_nama']; ?></dd>
                            <dt class="col-sm-2 text-right">NIK Ayah</dt>
                            <dd class="col-sm-4">: <?= $row['ayah_nik']; ?></dd>
                            <dt class="col-sm-2 text-right">NIK Ibu</dt>
                            <dd class="col-sm-4">: <?= $row['ibu_nik']; ?></dd>
                            <dt class="col-sm-2 text-right">TTL Ayah</dt>
                            <dd class="col-sm-4">:
                                <?= $row['ayah_tmp_lahir'].', '.date('d-m-Y',strtotime($row['ayah_tgl_lahir'])); ?></dd>
                            <dt class="col-sm-2 text-right">TTL Ibu</dt>
                            <dd class="col-sm-4">:
                                <?= $row['ibu_tmp_lahir'].', '.date('d-m-Y',strtotime($row['ibu_tgl_lahir'])); ?></dd>
                            <dt class="col-sm-2 text-right">Kewarganegaraan Ayah</dt>
                            <dd class="col-sm-4">: <?= $row['ayah_negara']; ?></dd>
                            <dt class="col-sm-2 text-right">Kewarganegaraan Ibu</dt>
                            <dd class="col-sm-4">: <?= $row['ibu_negara']; ?></dd>
                            <dt class="col-sm-2 text-right">Agama Ayah</dt>
                            <dd class="col-sm-4">: <?= $row['ayah_agama']; ?></dd>
                            <dt class="col-sm-2 text-right">Agama Ibu</dt>
                            <dd class="col-sm-4">: <?= $row['ibu_agama']; ?></dd>
                            <dt class="col-sm-2 text-right">Telp Ayah</dt>
                            <dd class="col-sm-4">: <?= $row['ayah_hp']; ?></dd>
                            <dt class="col-sm-2 text-right">Telp Ibu</dt>
                            <dd class="col-sm-4">: <?= $row['ibu_hp']; ?></dd>
                            <dt class="col-sm-2 text-right">Pend. Terakhir Ayah</dt>
                            <dd class="col-sm-4">: <?= $row['ayah_pend_terakhir']; ?></dd>
                            <dt class="col-sm-2 text-right">Pend. Terakhir Ibu</dt>
                            <dd class="col-sm-4">: <?= $row['ibu_pend_terakhir']; ?></dd>
                            <dt class="col-sm-2 text-right">Pekerjaan Ayah</dt>
                            <dd class="col-sm-4">: <?= $row['ayah_pekerjaan']; ?></dd>
                            <dt class="col-sm-2 text-right">Pekerjaan Ibu</dt>
                            <dd class="col-sm-4">: <?= $row['ibu_pekerjaan']; ?></dd>
                            <dt class="col-sm-2 text-right">Penghasilan Ayah</dt>
                            <dd class="col-sm-4">: <?= 'Rp.'.$row['ayah_penghasilan']; ?></dd>
                            <dt class="col-sm-2 text-right">Penghasilan Ibu</dt>
                            <dd class="col-sm-4">: <?= 'Rp.'.$row['ibu_penghasilan']; ?></dd>
                            <dt class="col-sm-2 text-right">Ibu Kandung Ayah</dt>
                            <dd class="col-sm-4">: <?= $row['ayah_nama_ibu']; ?></dd>
                            <dt class="col-sm-2 text-right">Ibu Kandung Ibu</dt>
                            <dd class="col-sm-4">: <?= $row['ibu_nama_ibu']; ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>