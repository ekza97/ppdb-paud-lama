<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="<?=base_url('login');?>" class="h1"><b>PPDB</b> PAUD</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Silahkan isi form dibawah</p>

            <form action="<?=base_url('register/create');?>" method="post">
                <div class="input-group mb-0">
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama lengkap"
                        value="<?=set_value('nama_lengkap');?>" autofocus required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <span class="text-danger mt-3" style="font-size:9pt;"><?= form_error('nama_lengkap'); ?></span>
                <div class="input-group mb-0 mt-3">
                    <input type="text" class="form-control" name="username" placeholder="Username"
                        value="<?=set_value('username');?>" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <span class="text-danger" style="font-size:9pt;"><?= form_error('username'); ?></span>
                <div class="input-group mb-0 mt-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <span class="text-danger" style="font-size:9pt;"><?= form_error('password'); ?></span>
                <div class="row mt-3">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Buat Akun</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <p class="mt-4 mb-0">
                Sudah punya akun ? <a href="<?=base_url('login');?>" class="text-center">Login</a>
            </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>


<!-- /.login-box -->
