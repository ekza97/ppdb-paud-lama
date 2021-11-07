<html>

<head>
    <style type="tetx/css">
        h2{ 
				padding:0px;
				margin:0px;
			}
			text{
				padding:0px;
				}
			td{
				text-align:center;
			}
		</style>
    <title>Cetak Kartu Bukti Pendaftaran</title>
</head>

<body>

    <div style="page-break-after:always;">
        <center>
            <br />
            <img src="<?= base_url('uploads/'._profil()->logo); ?>" width="70"
                style="float:left;margin-left:25px;margin-top:5px;margin-bottom:5px;">
            <!-- <img src="<?= base_url('upload/annur.png'); ?>" width="70" style="float:right;margin-top:15px;"> -->
            <h2 style="line-height:5px;color:red;">YAYASAN HOLISTIK KHEZED</h2>
            <h3 style="line-height:5px;color:blue;"><?= _profil()->nama; ?></h3>
            <h5 style="line-height:5px;"></h5>
            <p style="text-align:center;line-height:12px;margin-bottom:0px;margin-left:5px;font-size:10pt;">Alamat: <i
                    style="font-size:10pt;"><?= _profil()->alamat.' '._profil()->kab.' '._profil()->prov.' Kode Pos : '._profil()->kode_pos; ?></i>
                Email:
                <i style="font-size:10pt;"><?= _profil()->email; ?></i>
            </p>
            <hr style="border:1px solid">
            <hr style="border:0.5px solid;margin-top:-5px;">
            <h4><u>FORMULIR PENDAFTARAN PESERTA DIDIK</u></h4>
            <br>
        </center>
        <ol type="A">
            <h4>
                <li>IDENTITAS ANAK</li>
            </h4>
            <table border="0" width="95%" style="font-size:12pt; line-height:150%;">
                <tbody>
                    <tr>
                        <td>Nomor Pendaftaran</td>
                        <td>:</td>
                        <td><?= $row['no_daftar']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Nama Lengkap</td>
                        <td width="5">:</td>
                        <td><?= $row['nama_lengkap']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Nama Panggilan</td>
                        <td width="5">:</td>
                        <td><?= $row['nama_alias']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Jenis Kelamin</td>
                        <td width="5">:</td>
                        <td><?= $row['jk']=='L'?'Laki-Laki':'Perempuan'; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Tempat Tanggal Lahir</td>
                        <td width="5">:</td>
                        <td><?= $row['tmp_lahir'].', '.date('d/m/Y',strtotime($row['tgl_lahir'])); ?></td>
                    </tr>
                    <tr>
                        <td width="250">NIK</td>
                        <td width="5">:</td>
                        <td><?= $row['nik']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Nomor Akta Kelahiran</td>
                        <td width="5">:</td>
                        <td><?= $row['no_akta']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Agama</td>
                        <td width="5">:</td>
                        <td><?= $row['agama']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Kewarganeraan</td>
                        <td width="5">:</td>
                        <td><?= $row['warga_negara']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Anak Ke</td>
                        <td width="5">:</td>
                        <td><?= $row['anak_ke']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Jumlah Saudara Kandung</td>
                        <td width="5">:</td>
                        <td><?= $row['sdr_kandung']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Jumlah Orang dalam satu Rumah</td>
                        <td width="5">:</td>
                        <td><?= $row['jml_orang']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Berat Badan</td>
                        <td width="5">:</td>
                        <td><?= $row['berat_badan']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Tinggi Badan</td>
                        <td width="5">:</td>
                        <td><?= $row['tinggi_badan']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Alamat Rumah Lengkap</td>
                        <td width="5">:</td>
                        <td><?= $row['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Jarak Dari Sekolah</td>
                        <td width="5">:</td>
                        <td><?= $row['jarak_sekolah']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Berat Badan Saat Lahir</td>
                        <td width="5">:</td>
                        <td><?= $row['berat_lahir']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Riwayat Penyakit Diderita/Berat</td>
                        <td width="5">:</td>
                        <td><?= $row['h_penyakit']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Pantangan/Alergi Makanan</td>
                        <td width="5">:</td>
                        <td><?= $row['alergi']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Kebutuhan Khusus</td>
                        <td width="5">:</td>
                        <td><?= $row['k_khusus']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Diterima di Kelas/Kelompok</td>
                        <td width="5">:</td>
                        <td><?= $row['kelas']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Ukuran Baju</td>
                        <td width="5">:</td>
                        <td><?= $row['u_baju']; ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h4>
                <li>DATA AYAH</li>
            </h4>
            <table border="0" width="95%" style="font-size:12pt; line-height:150%;">
                <tbody>
                    <tr>
                        <td>Nama Ayah</td>
                        <td>:</td>
                        <td><?= $row['ayah_nama']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Tempat Tanggal Lahir</td>
                        <td width="5">:</td>
                        <td><?= $row['ayah_tmp_lahir'].', '.date('d/m/Y',strtotime($row['ayah_tgl_lahir'])); ?></td>
                    </tr>
                    <tr>
                        <td width="250">NIK</td>
                        <td width="5">:</td>
                        <td><?= $row['ayah_nik']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Kewarganeraan</td>
                        <td width="5">:</td>
                        <td><?= $row['ayah_negara']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Agama</td>
                        <td width="5">:</td>
                        <td><?= $row['ayah_agama']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Alamat Rumah Lengkap</td>
                        <td width="5">:</td>
                        <td><?= $row['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">No. HP/WA</td>
                        <td width="5">:</td>
                        <td><?= $row['ayah_hp']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Pendidikan Terakhir</td>
                        <td width="5">:</td>
                        <td><?= $row['ayah_pend_terakhir']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Pekerjaan</td>
                        <td width="5">:</td>
                        <td><?= $row['ayah_pekerjaan']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Penghasilan Perbulan</td>
                        <td width="5">:</td>
                        <td><?= $row['ayah_penghasilan']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Nama Ibu Kandung</td>
                        <td width="5">:</td>
                        <td><?= $row['ayah_nama_ibu']; ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h4>
                <li>DATA IBU</li>
            </h4>
            <table border="0" width="95%" style="font-size:12pt; line-height:150%;">
                <tbody>
                    <tr>
                        <td>Nama Ibu</td>
                        <td>:</td>
                        <td><?= $row['ibu_nama']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Tempat Tanggal Lahir</td>
                        <td width="5">:</td>
                        <td><?= $row['ibu_tmp_lahir'].', '.date('d/m/Y',strtotime($row['ibu_tgl_lahir'])); ?></td>
                    </tr>
                    <tr>
                        <td width="250">NIK</td>
                        <td width="5">:</td>
                        <td><?= $row['ibu_nik']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Kewarganeraan</td>
                        <td width="5">:</td>
                        <td><?= $row['ibu_negara']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Agama</td>
                        <td width="5">:</td>
                        <td><?= $row['ibu_agama']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Alamat Rumah Lengkap</td>
                        <td width="5">:</td>
                        <td><?= $row['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">No. HP/WA</td>
                        <td width="5">:</td>
                        <td><?= $row['ibu_hp']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Pendidikan Terakhir</td>
                        <td width="5">:</td>
                        <td><?= $row['ibu_pend_terakhir']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Pekerjaan</td>
                        <td width="5">:</td>
                        <td><?= $row['ibu_pekerjaan']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Penghasilan Perbulan</td>
                        <td width="5">:</td>
                        <td><?= $row['ibu_penghasilan']; ?></td>
                    </tr>
                    <tr>
                        <td width="250">Nama Ibu Kandung</td>
                        <td width="5">:</td>
                        <td><?= $row['ibu_nama_ibu']; ?></td>
                    </tr>
                </tbody>
            </table>
        </ol>
        <br>
        <p style="text-align:right;margin-right:70px;">
            Manokwari, <?= date('d-M-y'); ?><br>
            Orang Tua/Wali
            <br>
            <br>
            <br>
            <br>
            <br>
            <?= $row['ayah_nama']; ?>
        </p>
        <br>
        <h5>Keterangan:</h5>
        <ol>
            <li>Membawa buku KMS (Kartu Manuju Sehat)</li>
            <li>Semua data di input ke buku induk anak, Data DAPODIK dan formulir isian ini diarsipkan selama 5 tahun.
                Mohon di isi dengan LENGKAP</li>
        </ol>

    </div>
</body>
<script>
window.print();
</script>


</html>
