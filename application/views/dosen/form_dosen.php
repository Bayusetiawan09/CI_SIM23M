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
                        <li class="breadcrumb-item active">Dosen</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Dosen</h3>
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
                <form action="<?php echo base_url('dosen/insert'); ?>" method="POST">
                    <div class="form-group">
                        <label for="nidn">Nidn</label>
                        <input type="text" class="form-control" name="nidn" id="nidn" placeholder="Nidn" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_dosen">Nama Dosen</label>
                        <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" placeholder="Nama Dosen" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required></input>
                    </div>

                    <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                        <option value="" disabled selected>-- Pilihan --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                 </div>


                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label for="telepon">Telp</label>
                        <input type="number" class="form-control" name="telepon" id="telepon" placeholder="Telp" >
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="<?php echo base_url('dosen'); ?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                
            </div>
        </div>
    </section>
</div>
