<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Institute Teknologi Bina Sarana Global</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dosen</li>
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
                <h3 class="card-title">Data Dosen</h3>
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
                <a href="<?= base_url('dosen/tambah'); ?>" class="btn btn-primary mb-3">Create Dosen</a>
                <?php if (!empty($dosen)): ?>
                    <table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No </th>
							<th>NIDN</th>
							<th>Nama Dosen</th>
							<th>Jenis Kelamin</th>
							<th>Email</th>
							<th>Telp</th>
							<th>Action</th> 
						</tr>
					</thead>
					<tbody>
					<?php $no = 1; foreach ($dosen as $b): ?>
						<tr>
							<td><?= $no++; ?></td> 
							<td><?= $b['nidn']; ?></td>
							<td><?= $b['nama_dosen']; ?></td>
							<td><?= $b['jenis_kelamin']; ?></td>
							<td><?= $b['email']; ?></td>
							<td><?= $b['telepon']; ?></td>
							<td> 
								<a href="<?= base_url('dosen/view/' . $b['nidn']); ?>" class="btn btn-info btn-sm" title="Lihat">
									<i class="fas fa-eye"></i>
								</a>
								<a href="<?= base_url('dosen/edit/' . $b['nidn']); ?>" class="btn btn-warning btn-sm" title="Edit">
									<i class="fas fa-edit"></i>
								</a>
								<a href="<?= base_url('dosen/hapus/' . $b['nidn']); ?>" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Yakin ingin menghapus dosen ini?');">
									<i class="fas fa-trash"></i>
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>

                    </table>
                <?php else: ?>
                    <p class="text-center">Tidak ada data dosen yang tersedia.</p>
                <?php endif; ?>
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
