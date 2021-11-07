<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profil Sekolah</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profil Sekolah</li>
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
                        <h3 class="card-title">Form Profil Sekolah</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <?php 
					$hidden = [
						'idprofil_sekolah' => $row['idprofil_sekolah'],
						'logo_lama' => $row['logo'],
					];
					echo form_open('profil/save', ['method'=>'post','enctype'=>'multipart/form-data'], $hidden);
					?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Nama Sekolah', 'nama');
										$attr = [
											'id'=>'nama',
											'class'=>'form-control',
											'placeholder'=>'Nama sekolah'
										];
										echo form_input('nama', $row['nama'], $attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Alamat Email', 'email');
										$attr = [
											'id'=>'email',
											'type'=>'email',
											'name'=>'email',
											'value'=>$row['email'],
											'class'=>'form-control'
										];
										echo form_input($attr,'');
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Alamat Sekolah', 'alamat');
										$attr = [
											'id'=>'alamat',
											'name'=>'alamat',
											'rows'=>'5',
											'class'=>'form-control',
											'placeholder'=>'Alamat Sekolah'
										];
										echo form_textarea($attr, $row['alamat']);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Situs Web', 'website');
										$attr = [
											'id'=>'website',
											'class'=>'form-control',
											'placeholder'=>'Situs Web'
										];
										echo form_input('website', $row['website'], $attr);
										?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <?php
										echo form_label('Telp Sekolah', 'telp');
										$attr = [
											'id'=>'telp',
											'class'=>'form-control',
											'placeholder'=>'Website'
										];
										echo form_input('telp', $row['telp'], $attr);
										?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <?php
										echo form_label('Provinsi', 'prov');
										$attr = [
											'id'=>'prov',
											'class'=>'form-control',
											'placeholder'=>'Provinsi'
										];
										echo form_input('prov', $row['prov'], $attr);
										?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <?php
										echo form_label('Kabupaten', 'kab');
										$attr = [
											'id'=>'kab',
											'class'=>'form-control',
											'placeholder'=>'Kabupaten'
										];
										echo form_input('kab', $row['kab'], $attr);
										?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <?php
										echo form_label('Kode POS', 'kode_pos');
										$attr = [
											'id'=>'kode_pos',
											'class'=>'form-control',
											'placeholder'=>'Kode POS'
										];
										echo form_input('kode_pos', $row['kode_pos'], $attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?= form_label('Logo Sekolah', 'logo');?>
                                        <div style="border:1px solid;width:150px;height:150px;margin:5px 0px 25px 0px;">
                                            <img src="<?=base_url('uploads/'.$row['logo']);?>" alt="Logo Sekolah"
                                                width="145" height="145">
                                        </div>
                                        <?php
										$attr = [
											'id'=>'logo',
											'class'=>'form-control angka',
											'placeholder'=>'Logo Sekolah'
										];
										echo form_upload('logo', $row['logo'], $attr);
										?>
                                        <span class="muted">File format .jpg .jpeg .png .bmp dan berukuran maksimal 2
                                            MB</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
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
