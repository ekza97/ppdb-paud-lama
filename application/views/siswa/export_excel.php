<?php
	header("Chace-Control: no-chace, must-revalidate");
	header("Pragma: no-chace");
	header("Content-type: application/x-msexcel");
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=Export_Excel.xls");
?>

<style type="text/css">
table,
th,
td {
    border-collapse: collapse;
    padding: 15px;
    margin: 10px;
    color: #000;
    font-size: 12pt;
    font-family: times;
}
</style>

<div style="text-align: center;">
    <span style="margin-left: 10px; font-size: 14px; font-family: times;"><b></b></span>

</div>
<br>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>No. Pendaftaran</th>
            <th>Nomor KK</th>
            <th>NIK</th>
            <th>Nama Lengkap</th>
            <th>JK</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>No. Akta Kelahiran</th>
            <th>Agama</th>
            <th>Kewarganegaraan</th>
            <th>Anak Ke</th>
            <th>Saudara Kandung</th>
            <th>Jumlah Orang dalam Rumah</th>
            <th>Tinggi Badan</th>
            <th>Berat Badan</th>
            <th>Alamat Lengkap</th>
            <th>Jarak Ke Sekolah</th>
            <th>Berat Saat Lahir</th>
            <th>Riwayat Penyakit Diderita/Berat</th>
            <th>Alergi Makanan</th>
            <th>Kebutuhan Khusus</th>
            <th>Diterima di Kelas/Kelompok</th>
            <th>Ukuran Baju</th>
            <th>Status</th>
            <th>Nama Ayah</th>
            <th>NIK Ayah</th>
            <th>Tempat Lahir Ayah</th>
            <th>Tanggal Lahir Ayah</th>
            <th>Kewarganegaraan Ayah</th>
            <th>Agama Ayah</th>
            <th>Telp Ayah</th>
            <th>Pend. Terakhir Ayah</th>
            <th>Pekerjaan Ayah</th>
            <th>Penghasilan Ayah</th>
            <th>Ibu Kandung Ayah</th>
            <th>Nama Ibu</th>
            <th>NIK Ibu</th>
            <th>Tempat Lahir Ibu</th>
            <th>Tanggal Lahir Ibu</th>
            <th>Kewarganegaraan Ibu</th>
            <th>Agama Ibu</th>
            <th>Telp Ibu</th>
            <th>Pend. Terakhir Ibu</th>
            <th>Pekerjaan Ibu</th>
            <th>Penghasilan Ibu</th>
            <th>Ibu Kandung Ibu</th>
        </tr>
    </thead>
    <tbody>
        <?php $n=1; foreach($siswa as $row): ?>
        <tr>
            <td><?=$n++; ?></td>
            <td><?=$row['no_daftar']; ?></td>
            <td><?=$row['no_kk']; ?></td>
            <td><?=$row['nik']; ?></td>
            <td><?=$row['nama_lengkap']; ?></td>
            <td><?=$row['jk']; ?></td>
            <td><?=$row['tmp_lahir']; ?></td>
            <td><?=$row['tgl_lahir']; ?></td>
            <td><?=$row['no_akta']; ?></td>
            <td><?=$row['agama']; ?></td>
            <td><?=$row['warga_negara']; ?></td>
            <td><?=$row['anak_ke']; ?></td>
            <td><?=$row['sdr_kandung'].' Orang'; ?></td>
            <td><?=$row['jml_orang'].' Orang'; ?></td>
            <td><?=$row['tinggi_badan'].' cm'; ?></td>
            <td><?=$row['berat_badan'].' kg'; ?></td>
            <td><?=$row['alamat']; ?></td>
            <td><?=$row['jarak_sekolah'].' km'; ?></td>
            <td><?=$row['berat_lahir'].' kg'; ?></td>
            <td><?=$row['h_penyakit']; ?></td>
            <td><?=$row['alergi']; ?></td>
            <td><?=$row['k_khusus']; ?></td>
            <td><?=$row['kelas']; ?></td>
            <td><?=$row['u_baju']; ?></td>
            <td><?=$row['status']; ?></td>
            <td><?=$row['ayah_nama']; ?></td>
            <td><?=$row['ayah_nik']; ?></td>
            <td><?=$row['ayah_tmp_lahir']; ?></td>
            <td><?=$row['ayah_tgl_lahir']; ?></td>
            <td><?=$row['ayah_negara']; ?></td>
            <td><?=$row['ayah_agama']; ?></td>
            <td><?=$row['ayah_hp']; ?></td>
            <td><?=$row['ayah_pend_terakhir']; ?></td>
            <td><?=$row['ayah_pekerjaan']; ?></td>
            <td><?=$row['ayah_penghasilan']; ?></td>
            <td><?=$row['ayah_nama_ibu']; ?></td>
            <td><?=$row['ibu_nama']; ?></td>
            <td><?=$row['ibu_nik']; ?></td>
            <td><?=$row['ibu_tmp_lahir']; ?></td>
            <td><?=$row['ibu_tgl_lahir']; ?></td>
            <td><?=$row['ibu_negara']; ?></td>
            <td><?=$row['ibu_agama']; ?></td>
            <td><?=$row['ibu_hp']; ?></td>
            <td><?=$row['ibu_pend_terakhir']; ?></td>
            <td><?=$row['ibu_pekerjaan']; ?></td>
            <td><?=$row['ibu_penghasilan']; ?></td>
            <td><?=$row['ibu_nama_ibu']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>