<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Upload Dokumen "<?= $row['nama_lengkap']; ?>"</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Upload Dokumen</li>
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
                    <?php 
					$hidden = [
						'siswa_id' => $row['idsiswa']
					];
					echo form_open('biodata/upload_dok', ['method'=>'post','enctype'=>'multipart/form-data'], $hidden);
					?>
                    <div class="card-header">
                        <a href="<?=base_url('menu/biodata_anak');?>" class="btn btn-secondary float-left"><i
                                class="fas fa-chevron-left"></i> Kembali</a>
                        <?php 
							$data = array(
								'class'			=> 'btn btn-primary float-right',
								'type'          => 'submit',
								'content'       => '<i class="fas fa-upload"></i> Upload Dokumen'
							);
							echo form_button($data);
						?>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-7 mb-3">
                                        <?php
										echo form_label('Keterangan', 'keterangan');
										$attr = [
											'id'=>'keterangan',
											'class'=>'form-control',
											'placeholder'=>'Ketikkan nama dokumen'
										];
										echo form_input('keterangan', '', $attr);
										?>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <?= form_label('File Dokumen', 'nama_file');?>
                                        <?php
										$attr = [
											'id'=>'nama_file',
											'class'=>'form-control angka',
											'placeholder'=>'File Dokumen'
										];
										echo form_upload('nama_file', '', $attr);
										?>
                                        <span class="muted">File format .jpg .jpeg .png .bmp dan berukuran maksimal 2
                                            MB</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <?= form_close(); ?>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Dokumen di Upload</h4>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="20">NO</th>
                                    <th width="110">FILE DOKUMEN</th>
                                    <th>KETERANGAN</th>
                                    <th width="80">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $n=1; foreach(dokumen($row['idsiswa']) as $row): ?>
                                <tr>
                                    <td><?= $n++; ?></td>
                                    <td>
                                        <a href="<?=base_url('uploads/'.$row['nama_file']);?>" target="_blank">
                                            <img src="<?=base_url('uploads/'.$row['nama_file']);?>" alt="File Dokumen"
                                                width="100" height="100">
                                        </a>
                                    </td>
                                    <td><?= $row['keterangan']; ?></td>
                                    <td align="center">
                                        <a href="<?=base_url('biodata/del_dokumen/'.$row['iddokumen']);?>"
                                            class="btn btn-danger btn-sm btn-hapus"><i class="fas fa-trash"></i>
                                            Hapus</a>
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
