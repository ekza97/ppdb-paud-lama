<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Biodata Anak</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Biodata Anak</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="<?=base_url('biodata/create');?>" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                            Tambah
                        </a>
                        <?php if($this->session->userdata('level')=='Admin'): ?>
                        <a href="<?php echo base_url('biodata/excel'); ?>" class="btn btn-primary float-right"><i
                                class="fas fa-file-excel"></i>
                            Export Excel</a>
                        <?php endif; ?>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="20">NO</th>
                                    <th>NIK</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>TTL</th>
                                    <th>JK</th>
                                    <th>AYAH & IBU</th>
                                    <th>ALAMAT</th>
                                    <th>STATUS</th>
                                    <th width="100">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $n=1; foreach($siswa as $row): ?>
                                <tr>
                                    <td><?= $n++; ?></td>
                                    <td><?= $row['nik']; ?></td>
                                    <td><?= $row['nama_lengkap']; ?></td>
                                    <td><?= $row['tmp_lahir'].', '.date('d/m/Y',strtotime($row['tgl_lahir'])); ?></td>
                                    <td><?= $row['jk']; ?></td>
                                    <td><?= $row['ayah_nama'].' & '.$row['ibu_nama']; ?></td>
                                    <td><?= $row['alamat']; ?></td>
                                    <td>
                                        <?php if($row['status']=='Baru'): ?>
                                        <span class="badge badge-primary"><?= $row['status']; ?></span>
                                        <?php elseif($row['status']=='Diterima'): ?>
                                        <span class="badge badge-success"><?= $row['status']; ?></span>
                                        <?php else: ?>
                                        <span class="badge badge-danger"><?= $row['status']; ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td align="center">
                                        <a href="<?=base_url('biodata/detail/'.$row['idsiswa']);?>"
                                            class="btn btn-primary btn-xs" title="Lihat Detail"><i
                                                class="fas fa-eye"></i></a>
                                        <a href="<?=base_url('biodata/dokumen/'.$row['idsiswa']);?>"
                                            class="btn btn-secondary btn-xs" title="Upload Dokumen"><i
                                                class="fas fa-upload"></i></a>
                                        <a href="<?=base_url('biodata/update/'.$row['idsiswa']);?>"
                                            class="btn btn-info btn-xs" title="Ubah Data"><i
                                                class="fas fa-edit"></i></a>
                                        <?php if($this->session->userdata('level')=='Admin'): ?>
                                        <a href="<?=base_url('biodata/delete/'.$row['idsiswa']);?>"
                                            class="btn btn-danger btn-xs btn-hapus" title="Hapus Data"><i
                                                class="fas fa-trash"></i></a>
                                        <?php else: ?>
                                        <a href="<?=base_url('biodata/formulir/'.$row['idsiswa']);?>"
                                            class="btn btn-success btn-xs" title="Cetak Formulir" target="_blank"><i
                                                class="fas fa-print"></i></a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>

    <!-- /.container-fluid -->
</section>

<!-- /.content -->