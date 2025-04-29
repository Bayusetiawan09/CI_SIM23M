<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Registrasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Registrasi</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <?php if ($this->session->flashdata('succes')): ?>
                    <div class="alert alert-success"><?= $this->session->flashdata('succes'); ?></div>
                <?php endif; ?>
                
                <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
                <?php endif; ?>
                
                <?= validation_errors('<p style="color:red;">','</p>'); ?>

                <form action="<?= base_url('auth/process_register'); ?>" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" required>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Konfirmasi password" required>
                    </div>

                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" name="role" required>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

            <div class="card-footer text-center">
                <!-- Footer bisa ditambahkan di sini -->
            </div>
        </div>
    </section>
</div>
