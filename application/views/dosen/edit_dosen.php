<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Institut Teknologi dan Bisnis Bina Sarana Global</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Dosen</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Dosen</h3>
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
                <form action="<?php echo base_url('dosen/update/'.$dosen['nidn']); ?>" method="POST">
                    <div class="form-group">
                        <label for="nidn">Nidn</label>
                        <input type="text" class="form-control" name="nidn" id="nidn" value="<?= $dosen['nidn']; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nama_dosen">Nama Dosen</label>
                        <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" value="<?= $dosen['nama_dosen']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $dosen['alamat']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                            <option value="Laki-laki" <?= ($dosen['jenis_kelamin'] == "Laki-laki") ? 'selected' : ''; ?>>Laki-laki</option>
                            <option value="Perempuan" <?= ($dosen['jenis_kelamin'] == "Perempuan") ? 'selected' : ''; ?>>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?= $dosen['email']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="telepon">Telp</label>
                        <input type="number" class="form-control" name="telepon" id="telepon" value="<?= $dosen['telepon']; ?>" required>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="<?php echo base_url('dosen'); ?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
            <div class="card-footer">
               
            </div>
        </div>
    </section>
</div>
