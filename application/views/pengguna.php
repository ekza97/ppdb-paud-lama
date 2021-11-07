<script>
function edit(x) {
    if (x == 'add') {
        $('#staticBackdrop .modal-title').html('Tambah Pengguna');
        $('.pass-info-r').show();
        $('.pass-info').hide();
        $('[name="username"]').prop('readonly', false);
        $('[name="idpengguna"]').val("");
        $('[name="nama_lengkap"]').val("");
        $('[name="username"]').val("");
    } else {
        $('#staticBackdrop').modal('show');
        $('[name="username"]').prop('readonly', true);
        $('.pass-info-r').hide();
        $('.pass-info').show();
        $('#staticBackdrop .modal-title').html('Edit Pengguna');

        $.ajax({
            type: "POST",
            data: {
                id: x
            },
            url: '<?=base_url();?>user/view',
            dataType: 'json',
            success: function(data) {
                $('[name="idpengguna"]').val(data.idpengguna);
                $('[name="nama_lengkap"]').val(data.nama_lengkap);
                $('[name="username"]').val(data.username);
            }
        });
    }
}
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="title-datatable">Data Pengguna</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Pengguna</li>
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
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop"
                            onclick="edit('add')">
                            <i class="fas fa-plus"></i>
                            Tambah
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="20">NO</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>USERNAME</th>
                                    <th>LEVEL</th>
                                    <th width="50">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $n=1; foreach($all_user as $row): ?>
                                <tr>
                                    <td><?= $n++; ?></td>
                                    <td><?= $row['nama_lengkap']; ?></td>
                                    <td><?= $row['username']; ?></td>
                                    <td><?= $row['level']; ?></td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm" title="Ubah Data"
                                            onclick="edit(<?=$row['idpengguna'];?>)"><i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?=base_url('user/delete/'.$row['idpengguna']);?>"
                                            class="btn btn-danger btn-sm btn-hapus" title="Hapus Data"><i
                                                class="fas fa-trash"></i></a>
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
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?=base_url('user/save');?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Pengguna <span class="text-danger">*</span></label>
                        <input type="hidden" name="idpengguna">
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password <span class="text-danger pass-info-r">*</span></label>
                        <input type="password" class="form-control" id="password" name="password">
                        <small class="text-danger pass-info">Biarkan kosong jika tidak ingin mengubah password</small>
                    </div>
                </div>
                <div class="modal-footer float-left">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i>
                        Batal</button>
                </div>
                <div class="modal-footer float-right">
                    <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i>
                        Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
