<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= isset($edit)?'Edit':'Tambah'; ?> Biodata Anak</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active"><?= isset($edit)?'Edit':'Tambah'; ?> Biodata Anak </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><?= isset($edit)?'Form Edit':'Form Tambah'; ?> Biodata Anak</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <?php 
					$hidden = [
						'idsiswa' => isset($edit)?$row['idsiswa']:''];
					echo form_open('biodata/save', ['method'=>'post'], $hidden);
					?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <?php if(!isset($edit)): ?>
                                            <label>Orang Tua</label>
                                            <select class="form-control select2" style="width: 100%;"
                                                name="orang_tua_id">
                                                <option value="">Pilih Orang Tua</option>
                                                <?php foreach(list_ortu($this->session->userdata('level')=='Admin'?null:$this->session->userdata('id')) as $row): ?>
                                                <option value="<?=$row['idorang_tua'];?>">
                                                    <?= $row['ayah_nama'].' - '.$row['ibu_nama']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?php else: ?>
                                            <?php
												echo form_label('Orang Tua', 'orang_tua_id');
											
												$attr = [
													'id'=>'orang_tua_id',
													'class'=>'form-control select2'
												];
												echo form_dropdown('orang_tua_id', $ortu, isset($edit)?$row['orang_tua_id']:'',$attr);
												?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <?php
										echo form_label('Nomor KK', 'no_kk');
										$attr = [
											'id'=>'no_kk',
											'class'=>'form-control nik',
											'placeholder'=>'Nomor KK'
										];
										echo form_input('no_kk', isset($edit)?$row['no_kk']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <?php
										echo form_label('Nama Panggilan', 'nama_alias');
										$attr = [
											'id'=>'nama_alias',
											'class'=>'form-control',
											'placeholder'=>'Nama Panggilan'
										];
										echo form_input('nama_alias', isset($edit)?$row['nama_alias']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Nama Lengkap', 'nama_lengkap');
										$attr = [
											'id'=>'nama_lengkap',
											'class'=>'form-control',
											'placeholder'=>'Nama lengkap'
										];
										echo form_input('nama_lengkap', isset($edit)?$row['nama_lengkap']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <?php
										echo form_label('NIK', 'nik');
										$attr = [
											'id'=>'nik',
											'class'=>'form-control nik',
											'placeholder'=>'NIK'
										];
										echo form_input('nik', isset($edit)?$row['nik']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <?php
										echo form_label('Jenis Kelamin', 'jk');
										$options = [
											''=>'Pilih Jenis Kelamin',
											'L'=>'Laki-Laki',
											'P'=>'Perempuan'
										];
										$attr = [
											'id'=>'jk',
											'class'=>'form-control'
										];
										echo form_dropdown('jk', $options, isset($edit)?$row['jk']:'',$attr);
										?>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <?php
										echo form_label('Tempat Lahir', 'tmp_lahir');
										$attr = [
											'id'=>'tmp_lahir',
											'class'=>'form-control',
											'placeholder'=>'Tempat Lahir'
										];
										echo form_input('tmp_lahir', isset($edit)?$row['tmp_lahir']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <?php
										echo form_label('Tanggal Lahir', 'tgl_lahir');
										$attr = [
											'id'=>'tgl_lahir',
											'type'=>'date',
											'name'=>'tgl_lahir',
											'value'=>isset($edit)?$row['tgl_lahir']:'',
											'class'=>'form-control'
										];
										echo form_input($attr,'');
										?>
                                    </div>
                                    <div class="col-md-7 mb-3">
                                        <?php
										echo form_label('Nomor Akta Kelahiran', 'no_akta');
										$attr = [
											'id'=>'no_akta',
											'class'=>'form-control',
											'placeholder'=>'Nomor Akta Kelahiran'
										];
										echo form_input('no_akta', isset($edit)?$row['no_akta']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <?php
										echo form_label('Agama', 'agama');
										$options = [
											''=>'Pilih Agama',
											'Islam'=>'Islam',
											'Kristen Protestan'=>'Kristen Protestan',
											'Kristen Katolik'=>'Kristen Katolik',
											'Hindu'=>'Hindu',
											'Budha'=>'Budha',
											'Konghucu'=>'Konghucu'
										];
										$attr = [
											'id'=>'agama',
											'class'=>'form-control'
										];
										echo form_dropdown('agama', $options, isset($edit)?$row['agama']:'',$attr);
										?>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <?php
										echo form_label('Kewarganegaraan', 'warga_negara');
										$attr = [
											'id'=>'warga_negara',
											'class'=>'form-control',
											'placeholder'=>'Kewarganegaraan'
										];
										echo form_input('warga_negara', isset($edit)?$row['warga_negara']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <?php
										echo form_label('Anak Ke', 'anak_ke');
										$attr = [
											'id'=>'anak_ke',
											'class'=>'form-control angka',
											'placeholder'=>'Anak Ke'
										];
										echo form_input('anak_ke', isset($edit)?$row['anak_ke']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <?php
										echo form_label('Saudara Kandung', 'sdr_kandung');
										$attr = [
											'id'=>'sdr_kandung',
											'class'=>'form-control angka',
											'placeholder'=>'Saudara Kandung'
										];
										echo form_input('sdr_kandung', isset($edit)?$row['sdr_kandung']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <?php
										echo form_label('Jumlah Orang dalam Rumah', 'jml_orang');
										$attr = [
											'id'=>'jml_orang',
											'class'=>'form-control angka',
											'placeholder'=>'Jumlah Orang dalam Rumah'
										];
										echo form_input('jml_orang', isset($edit)?$row['jml_orang']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <?php
										echo form_label('Tinggi Badan', 'tinggi_badan');
										$attr = [
											'id'=>'tinggi_badan',
											'class'=>'form-control angka',
											'placeholder'=>'Tinggi Badan'
										];
										echo form_input('tinggi_badan', isset($edit)?$row['tinggi_badan']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <?php
										echo form_label('Berat Badan', 'berat_badan');
										$attr = [
											'id'=>'berat_badan',
											'class'=>'form-control angka',
											'placeholder'=>'Berat Badan'
										];
										echo form_input('berat_badan', isset($edit)?$row['berat_badan']:'', $attr);
										?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Alamat lengkap', 'alamat');
										$attr = [
											'id'=>'alamat',
											'name'=>'alamat',
											'rows'=>'3',
											'class'=>'form-control',
											'placeholder'=>'Alamat lengkap'
										];
										echo form_textarea($attr, isset($edit)?$row['alamat']:'');
										?>
                                    </div>
                                    <div class="col-md-7 mb-3">
                                        <?php
										echo form_label('Jarak Rumah ke Sekolah', 'jarak_sekolah');
										$options = [
											'Kurang Dari 1 KM'=>'Kurang Dari 1 KM',
											'Antara 1 - 5 KM'=>'Antara 1 - 5 KM',
											'Antara 5 - 10 KM'=>'Antara 5 - 10 KM',
											'Antara 10 - 15 KM'=>'Antara 10 - 15 KM',
											'Lebih dari 15 KM'=>'Lebih dari 15 KM'
										];
										$attr = [
											'id'=>'jarak_sekolah',
											'class'=>'form-control'
										];
										echo form_dropdown('jarak_sekolah', $options, isset($edit)?$row['jarak_sekolah']:'',$attr);
										?>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <?php
										echo form_label('Berat saat Lahir', 'berat_lahir');
										$attr = [
											'id'=>'berat_lahir',
											'class'=>'form-control angka',
											'placeholder'=>'Berat saat Lahir'
										];
										echo form_input('berat_lahir', isset($edit)?$row['berat_lahir']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Riwayat Penyakit', 'h_penyakit');
										$attr = [
											'id'=>'h_penyakit',
											'name'=>'h_penyakit',
											'rows'=>'6',
											'class'=>'form-control',
											'placeholder'=>'Riwayat penyakit yang di derita/berat'
										];
										echo form_textarea($attr, isset($edit)?$row['h_penyakit']:'');
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Pantangan/Alergi Makanan', 'alergi');
										$attr = [
											'id'=>'alergi',
											'class'=>'form-control',
											'placeholder'=>'Pantangan/Alergi Makanan'
										];
										echo form_input('alergi', isset($edit)?$row['alergi']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Kebutuhan Khusus', 'k_khusus');
										$attr = [
											'id'=>'k_khusus',
											'class'=>'form-control',
											'placeholder'=>'Kebutuhan Khusus'
										];
										echo form_input('k_khusus', isset($edit)?$row['k_khusus']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <?php
										echo form_label('Diterima di Kelas/Kelompok', 'kelas');
										$attr = [
											'id'=>'kelas',
											'class'=>'form-control',
											'placeholder'=>'Diterima di Kelas/Kelompok'
										];
										echo form_input('kelas', isset($edit)?$row['kelas']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <?php
										echo form_label('Ukuran Baju', 'u_baju');
										$attr = [
											'id'=>'u_baju',
											'class'=>'form-control',
											'placeholder'=>'Ukuran Baju'
										];
										echo form_input('u_baju', isset($edit)?$row['u_baju']:'', $attr);
										?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="<?=base_url('menu/biodata_anak');?>" class="btn btn-secondary float-left"><i
                                class="fas fa-chevron-left"></i> Kembali</a>
                        <?php 
							$data = array(
								'class'			=> 'btn btn-primary float-right',
								'type'          => 'submit',
								'content'       => '<i class="fas fa-save"></i> Simpan'
							);
							echo form_button($data);
						?>
                    </div>
                    <?= form_close(); ?>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>





</section>
