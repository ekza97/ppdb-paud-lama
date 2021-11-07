<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= isset($edit)?'Edit':'Tambah'; ?> Data Orang Tua</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active"><?= isset($edit)?'Edit':'Tambah'; ?> Data Orang Tua</li>
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
                        <h3 class="card-title"><?= isset($edit)?'Form Edit':'Form Tambah'; ?> Data Orang Tua</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <?php 
					$hidden = [
						'idorang_tua' => isset($edit)?$row['idorang_tua']:''];
					echo form_open('orangtua/save', ['method'=>'post'], $hidden);
					?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <?php
										echo form_label('Nama Ayah', 'ayah_nama');
										$attr = [
											'id'=>'ayah_nama',
											'class'=>'form-control',
											'placeholder'=>'Nama lengkap Ayah'
										];
										echo form_input('ayah_nama', isset($edit)?$row['ayah_nama']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <?php
										echo form_label('NIK Ayah', 'ayah_nik');
										$attr = [
											'id'=>'ayah_nik',
											'class'=>'form-control nik',
											'placeholder'=>'NIK Ayah'
										];
										echo form_input('ayah_nik', isset($edit)?$row['ayah_nik']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <?php
										echo form_label('Tempat Lahir Ayah', 'ayah_tmp_lahir');
										$attr = [
											'id'=>'ayah_tmp_lahir',
											'class'=>'form-control',
											'placeholder'=>'Tempat Lahir Ayah'
										];
										echo form_input('ayah_tmp_lahir', isset($edit)?$row['ayah_tmp_lahir']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <?php
										echo form_label('Tanggal Lahir Ayah', 'ayah_tgl_lahir');
										$attr = [
											'id'=>'ayah_tgl_lahir',
											'type'=>'date',
											'name'=>'ayah_tgl_lahir',
											'value'=>isset($edit)?$row['ayah_tgl_lahir']:'',
											'class'=>'form-control'
										];
										echo form_input($attr,'');
										?>
                                    </div>
                                    <div class="col-md-7 mb-3">
                                        <?php
										echo form_label('Kewarganegaraan Ayah', 'ayah_negara');
										$attr = [
											'id'=>'ayah_negara',
											'class'=>'form-control',
											'placeholder'=>'Kewarganegaraan Ayah'
										];
										echo form_input('ayah_negara', isset($edit)?$row['ayah_negara']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <?php
										echo form_label('Agama Ayah', 'ayah_agama');
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
											'id'=>'ayah_agama',
											'class'=>'form-control'
										];
										echo form_dropdown('ayah_agama', $options, isset($edit)?$row['ayah_agama']:'',$attr);
										?>
                                    </div>
                                    <div class="col-md-7 mb-3">
                                        <?php
										echo form_label('No. HP Ayah', 'ayah_hp');
										$attr = [
											'id'=>'ayah_hp',
											'class'=>'form-control angka',
											'placeholder'=>'No. HP Ayah'
										];
										echo form_input('ayah_hp', isset($edit)?$row['ayah_hp']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <?php
										echo form_label('Pendidikan Terakhir Ayah', 'ayah_pend_terakhir');
										$options = [
											''=>'Pilih Pendidikan Terakhir',
											'Tidak Sekolah'=>'Tidak Sekolah',
											'SD Sederajat'=>'SD Sederajat',
											'SMP Sederajat'=>'SMP Sederajat',
											'SMA Sederajat'=>'SMA Sederajat',
											'D1'=>'D1',
											'D2'=>'D2',
											'D3'=>'D3',
											'D4'=>'D4',
											'S1'=>'S1',
											'S2'=>'S2',
											'Doktor'=>'Doktor'
										];
										$attr = [
											'id'=>'ayah_pend_terakhir',
											'class'=>'form-control'
										];
										echo form_dropdown('ayah_pend_terakhir', $options, isset($edit)?$row['ayah_pend_terakhir']:'',$attr);
										?>
                                    </div>
                                    <div class="col-md-7 mb-3">
                                        <?php
										echo form_label('Pekerjaan Ayah', 'ayah_pekerjaan');
										$attr = [
											'id'=>'ayah_pekerjaan',
											'class'=>'form-control',
											'placeholder'=>'Pekerjaan Ayah'
										];
										echo form_input('ayah_pekerjaan', isset($edit)?$row['ayah_pekerjaan']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <?php
										echo form_label('Penghasilan Ayah', 'ayah_penghasilan');
										$attr = [
											'id'=>'ayah_penghasilan',
											'class'=>'form-control uang',
											'placeholder'=>'Penghasilan Ayah'
										];
										echo form_input('ayah_penghasilan', isset($edit)?$row['ayah_penghasilan']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Nama Ibu Kandung', 'ayah_nama_ibu');
										$attr = [
											'id'=>'ayah_nama_ibu',
											'class'=>'form-control',
											'placeholder'=>'Nama Ibu Kandung Ayah'
										];
										echo form_input('ayah_nama_ibu', isset($edit)?$row['ayah_nama_ibu']:'', $attr);
										?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <?php
										echo form_label('Nama Ibu', 'ibu_nama');
										$attr = [
											'id'=>'ibu_nama',
											'class'=>'form-control',
											'placeholder'=>'Nama lengkap Ibu'
										];
										echo form_input('ibu_nama', isset($edit)?$row['ibu_nama']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <?php
										echo form_label('NIK Ibu', 'ibu_nik');
										$attr = [
											'id'=>'ibu_nik',
											'class'=>'form-control nik',
											'placeholder'=>'NIK Ibu'
										];
										echo form_input('ibu_nik', isset($edit)?$row['ibu_nik']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <?php
										echo form_label('Tempat Lahir Ibu', 'ibu_tmp_lahir');
										$attr = [
											'id'=>'ibu_tmp_lahir',
											'class'=>'form-control',
											'placeholder'=>'Tempat Lahir Ibu'
										];
										echo form_input('ibu_tmp_lahir', isset($edit)?$row['ibu_tmp_lahir']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <?php
										echo form_label('Tanggal Lahir Ibu', 'ibu_tgl_lahir');
										$attr = [
											'id'=>'ibu_tgl_lahir',
											'type'=>'date',
											'name'=>'ibu_tgl_lahir',
											'value'=>isset($edit)?$row['ibu_tgl_lahir']:'',
											'class'=>'form-control'
										];
										echo form_input($attr,'');
										?>
                                    </div>
                                    <div class="col-md-7 mb-3">
                                        <?php
										echo form_label('Kewarganegaraan Ibu', 'ibu_negara');
										$attr = [
											'id'=>'ibu_negara',
											'class'=>'form-control',
											'placeholder'=>'Kewarganegaraan Ibu'
										];
										echo form_input('ibu_negara', isset($edit)?$row['ibu_negara']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <?php
										echo form_label('Agama Ibu', 'ibu_agama');
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
											'id'=>'ibu_agama',
											'class'=>'form-control'
										];
										echo form_dropdown('ibu_agama', $options, isset($edit)?$row['ibu_agama']:'',$attr);
										?>
                                    </div>
                                    <div class="col-md-7 mb-3">
                                        <?php
										echo form_label('No. HP Ibu', 'ibu_hp');
										$attr = [
											'id'=>'ibu_hp',
											'class'=>'form-control angka',
											'placeholder'=>'No. HP Ibu'
										];
										echo form_input('ibu_hp', isset($edit)?$row['ibu_hp']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <?php
										echo form_label('Pendidikan Terakhir Ibu', 'ibu_pend_terakhir');
										$options = [
											''=>'Pilih Pendidikan Terakhir',
											'Tidak Sekolah'=>'Tidak Sekolah',
											'SD Sederajat'=>'SD Sederajat',
											'SMP Sederajat'=>'SMP Sederajat',
											'SMA Sederajat'=>'SMA Sederajat',
											'D1'=>'D1',
											'D2'=>'D2',
											'D3'=>'D3',
											'D4'=>'D4',
											'S1'=>'S1',
											'S2'=>'S2',
											'Doktor'=>'Doktor'
										];
										$attr = [
											'id'=>'ibu_pend_terakhir',
											'class'=>'form-control'
										];
										echo form_dropdown('ibu_pend_terakhir', $options, isset($edit)?$row['ibu_pend_terakhir']:'',$attr);
										?>
                                    </div>
                                    <div class="col-md-7 mb-3">
                                        <?php
										echo form_label('Pekerjaan Ibu', 'ibu_pekerjaan');
										$attr = [
											'id'=>'ibu_pekerjaan',
											'class'=>'form-control',
											'placeholder'=>'Pekerjaan Ibu'
										];
										echo form_input('ibu_pekerjaan', isset($edit)?$row['ibu_pekerjaan']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <?php
										echo form_label('Penghasilan Ibu', 'ibu_penghasilan');
										$attr = [
											'id'=>'ibu_penghasilan',
											'class'=>'form-control uang',
											'placeholder'=>'Penghasilan Ibu'
										];
										echo form_input('ibu_penghasilan', isset($edit)?$row['ibu_penghasilan']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Nama Ibu Kandung', 'ibu_nama_ibu');
										$attr = [
											'id'=>'ibu_nama_ibu',
											'class'=>'form-control',
											'placeholder'=>'Nama Ibu Kandung Ibu'
										];
										echo form_input('ibu_nama_ibu', isset($edit)?$row['ibu_nama_ibu']:'', $attr);
										?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="<?=base_url('menu/orang_tua');?>" class="btn btn-secondary float-left"><i
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
