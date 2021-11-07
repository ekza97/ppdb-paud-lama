<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Siswa "<?= $row['nama_lengkap']; ?>"</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Detail Siswa</li>
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
                        <a href="<?=base_url('menu/biodata_anak');?>" class="btn btn-sm btn-primary"><i
                                class="fas fa-chevron-left"></i> Kembali</a>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-4 text-right">Nama Ayah & Ibu</dt>
                            <dd class="col-sm-8">: <?= $row['ayah_nama'].' & '.$row['ibu_nama']; ?></dd>
                            <dt class="col-sm-4 text-right">Nomor KK</dt>
                            <dd class="col-sm-8">: <?= $row['no_kk']; ?></dd>
                            <dt class="col-sm-4 text-right">Nama Lengkap</dt>
                            <dd class="col-sm-8">: <?= $row['nama_lengkap']; ?></dd>
                            <dt class="col-sm-4 text-right">Nama Panggilan</dt>
                            <dd class="col-sm-8">: <?= $row['nama_alias']; ?></dd>
                            <dt class="col-sm-4 text-right">NIK Siswa</dt>
                            <dd class="col-sm-8">: <?= $row['nik']; ?></dd>
                            <dt class="col-sm-4 text-right">Jenis Kelamin</dt>
                            <dd class="col-sm-8">: <?= $row['jk']=='L'?'Laki-Laki':'Perempuan'; ?></dd>
                            <dt class="col-sm-4 text-right">TTL Siswa</dt>
                            <dd class="col-sm-8">:
                                <?= $row['tmp_lahir'].', '.date('d-m-Y',strtotime($row['tgl_lahir'])); ?></dd>
                            <dt class="col-sm-4 text-right">Nomor Akta Kelahiran</dt>
                            <dd class="col-sm-8">: <?= $row['no_akta']; ?></dd>
                            <dt class="col-sm-4 text-right">Agama</dt>
                            <dd class="col-sm-8">: <?= $row['agama']; ?></dd>
                            <dt class="col-sm-4 text-right">Kewarganegaraan</dt>
                            <dd class="col-sm-8">: <?= $row['warga_negara']; ?></dd>
                            <dt class="col-sm-4 text-right">Anak Ke</dt>
                            <dd class="col-sm-8">: <?= $row['anak_ke']; ?></dd>
                            <dt class="col-sm-4 text-right">Jumlah Saudara Kandung</dt>
                            <dd class="col-sm-8">: <?= $row['sdr_kandung'].' Orang'; ?></dd>
                            <dt class="col-sm-4 text-right">Jumlah Orang dalam satu Rumah</dt>
                            <dd class="col-sm-8">: <?= $row['jml_orang'].' Orang'; ?></dd>
                            <dt class="col-sm-4 text-right">Tinggi Badan</dt>
                            <dd class="col-sm-8">: <?= $row['tinggi_badan'].' cm'; ?></dd>
                            <dt class="col-sm-4 text-right">Berat Badan</dt>
                            <dd class="col-sm-8">: <?= $row['berat_badan'].' kg'; ?></dd>
                            <dt class="col-sm-4 text-right">Alamat Lengkap</dt>
                            <dd class="col-sm-8">: <?= $row['alamat']; ?></dd>
                            <dt class="col-sm-4 text-right">Jarak Dari Sekolah</dt>
                            <dd class="col-sm-8">: <?= $row['jarak_sekolah'].' KM'; ?></dd>
                            <dt class="col-sm-4 text-right">Berat Badan Saat Lahir</dt>
                            <dd class="col-sm-8">: <?= $row['berat_lahir'].' kg'; ?></dd>
                            <dt class="col-sm-4 text-right">Riwayat Penyakit Di Derita/Berat</dt>
                            <dd class="col-sm-8">: <?= $row['h_penyakit']; ?></dd>
                            <dt class="col-sm-4 text-right">Pantangan Makanan/Alergi Makanan</dt>
                            <dd class="col-sm-8">: <?= $row['alergi']; ?></dd>
                            <dt class="col-sm-4 text-right">Kebutuhan Khusus</dt>
                            <dd class="col-sm-8">: <?= $row['k_khusus']; ?></dd>
                            <dt class="col-sm-4 text-right">Diterima di Kelas/Kelompok</dt>
                            <dd class="col-sm-8">: <?= $row['kelas']; ?></dd>
                            <dt class="col-sm-4 text-right">Ukuran Baju</dt>
                            <dd class="col-sm-8">: <?= $row['u_baju']; ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>