<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= totalSiswa() ?></h3>

                        <p>TOTAL CALON SISWA</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= totalSiswa('Diterima'); ?></h3>

                        <p>TOTAL DITERIMA</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?= totalSiswa('Ditolak'); ?></h3>

                        <p>TOTAL DITOLAK</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3><?= total('orang_tua') ?></h3>

                        <p>ORANG TUA</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-footer">
                        <h4>VISI <?= _profil()->nama; ?></h4>
                    </div>
                    <div class="card-body">
                        <p style="text-align:justify;">Berdasarkan Matius 19:14 (Tetapi Yesus berkata: "Biarkanlah
                            anak-anal itu, janganlah
                            menghalang-halangi mereka datang kepada-Ku; sebab orang-orang yang seperti itulah yang
                            empunya Kerajaan Sorga". PAUD TERPADU KIDS HOLISTIK berupaya menjadi PAUD yang terbaik,
                            membimbing dan mendidik anak menjadi aktif, kreatif, inovatif, serta bertumbuh di dalam
                            kasih Tuhan Yesus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-footer">
                        <h4>MISI <?= _profil()->nama; ?></h4>
                    </div>
                    <div class="card-body">
                        <p style="text-align:justify;">PAUD KIDS HOLISTIK melaksanakan visi melibatkan anak didik,
                            pendidik, dan orang tua.
                        </p>
                        <ol>
                            <li>Anak-anak dibimbing untuk bermain dan belajar dengan semangat suasana belajar yang
                                menyenangkan, sehingga bertumbuh dan berkembang menjadi anak yang baik, penuh kasih, dan
                                rendah hati, yang diimbangi dengan pencapaian yang maksimal seluruh potensi anak.</li>
                            <li>Guru yang mencintai anak-anak, seperti Tuhan Yesus yang mencintai anak-anak. Guru yang
                                takut akan Tuhan Yesus, melayani dengan hati dan tangan, bertanggung jawab dan
                                berdedikasi pada profesinya, mengikuti perkembangan ilmu pengetahuan dan metode
                                pengajaran, memberi teladan yang baik, serta komunikatif.</li>
                            <li>Orang tua murid yang memiliki hubungan harmonis dengan sekolah, sehingga terwujud kerja
                                sama yang selaras dalam bertanggung jawab terhadap pendidikan anak-anak.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-footer">
                        <h4>TUJUAN PEMBANGUNAN <?= _profil()->nama; ?></h4>
                    </div>
                    <div class="card-body">
                        <p style="text-align:justify;">Tujuan umum pembangunan PAUD Indonesia adalah untuk menguatkan
                            peran PAUD sebagai fundamen pembangunan pendidikan nasional, dengan tujuan khusus meliputi :
                        </p>
                        <ol>
                            <li>Memperluas layanan PAUD yang menjangkau semua lokasi dan komunitas anak usia dini.</li>
                            <li>Meningkatkan pemerataan layanan hingga menjangkau wilayah terisolir, tertinggal dan/atau
                                perbatasan.</li>
                            <li>Menyediakan layanan PAUD yang bermutu, akuntabel, dan selaras dengan tahap perkembangan
                                anak.</li>
                            <li>Mewujudkan layanan PAUD yang non-diskriminatif, inklusif, dan berkeadilan.</li>
                            <li>Mewujudkan sistem layanan PAUD yang menjamin semua anak usia dini bersempatan memperoleh
                                layanan PAUD.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-footer">
                        <h4>SASARAN STRATEGIS <?= _profil()->nama; ?></h4>
                    </div>
                    <div class="card-body">
                        <p style="text-align:justify;">Tersedianya dan terjangkaunya layanan PAUD bermutu dan
                            berkesetaraan gender di semua lapisan masyarakat di tingkat provinsi, kabupaten, kota,
                            bahkan sampai ke pedesaan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-footer">
                        <h4>MOTTO : 4B <?= _profil()->nama; ?></h4>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Beriman</li>
                            <li>Bermain</li>
                            <li>Belajar</li>
                            <li>Berkreasi</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-footer">
                        <h4>ANGGARAN PENERIMAAN SISWA BARU TAHUN AJARAN 2021/2022</h4>
                    </div>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td>1.</td>
                                <td>SPP bulan Juli</td>
                                <td>Rp. 150.000</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Pembangunan</td>
                                <td>Rp. 300.000</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Gizi Tambahan</td>
                                <td>Rp. 200.000</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Puncak Tema</td>
                                <td>Rp. 200.000</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Buku paket sekolah</td>
                                <td>Rp. 175.000</td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>Buku Aktivitas 2 Semester</td>
                                <td>Rp. 175.000</td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>PLS/Mos</td>
                                <td>Rp. 150.000</td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td><b>PERLENGKAPAN ANAK:</b></td>
                                <td>Rp. 150.000</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <ol type="a">
                                        <li>Sikat/odol</li>
                                        <li>Serbet tangan</li>
                                        <li>Sabun cuci tangan</li>
                                        <li>Perawatan Trampoline</li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td>9.</td>
                                <td>Raport</td>
                                <td>Rp. 200.000</td>
                            </tr>
                            <tr>
                                <td>10.</td>
                                <td><b>SERAGAM:</b></td>
                                <td>Rp. 800.000</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <ol type="a">
                                        <li>Merah Putih</li>
                                        <li>Batik</li>
                                    </ol>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-footer">
                        <h4>SYARAT PENDAFTARAN PESERTA DIDIK</h4>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Kelompok Bermain (KB) Usia : 3 Tahun sampai 4 Tahun (kurang 1 bulan)</li>
                            <li>TK A : Usia 4-5 Tahun (kurang 1 bulan)</li>
                            <li>TK B : Usia 5-6 Tahun (Lebih)</li>
                            <li>Foto Copy Akte Kelahiran 1 Lembar</li>
                            <li>Foto Copy Kartu Keluarga 1 Lembar</li>
                            <li>Pas Foto ukuran 3x4 sebanyak 6 Lembar</li>
                            <li>Foto Family 1 (satu) Lembar (Bapak, Mama, Anak, dan Keluarga dirumah)</li>
                            <li>Membawa KMS (Kartu Imunisasi Anak)</li>
                            <li>Menyediakan 1 pasang sandal anak</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>

        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>


<!-- /.content -->
