<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kategori</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Kategori</h3>
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
            <form action="<?= base_url('kategori/update/'.$kategori['idkategori']); ?>" method="POST">
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" name="kategori" id="kategori"  placeholder="Masukkan Nama Kategori" value="<?= $kategori['kategori']; ?>" required>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('kategori');?>" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <!-- Isi footer di sini -->
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
