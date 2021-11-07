<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Seleksi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Seleksi</li>
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
                        <button type="button" id="terima_all" class="btn btn-success float-left"><i
                                class="fas fa-check"></i> Terima</button>
                        <button type="button" id="tolak_all" class="btn btn-danger float-right"><i
                                class="fas fa-times"></i>
                            Tolak</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="20"><input type="checkbox" id="check_all" value=""></th>
                                    <th width="20">NO</th>
                                    <th>NIK</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>TTL</th>
                                    <th>JK</th>
                                    <th>AYAH & IBU</th>
                                    <th>ALAMAT</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $n=1; foreach($siswa as $row): ?>
                                <tr>
                                    <td><input type="checkbox" name="checked_id[]" class="check"
                                            value="<?= $row['idsiswa']; ?>"></td>
                                    <td><?= $n++; ?></td>
                                    <td><?= $row['nik']; ?></td>
                                    <td><?= $row['nama_lengkap']; ?></td>
                                    <td><?= $row['tmp_lahir'].', '.date('d m Y',strtotime($row['tgl_lahir'])); ?></td>
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