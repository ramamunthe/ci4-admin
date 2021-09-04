<?= $this->extend('admin/master') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="mb-3">
        <h3 class="mb-0">Data Mobil</h3>
        <span class="text-muted">Total data mobil 24 unit</span>
    </div>
    <a href="/armada-create" type="button" class="btn btn-primary">Tambah Mobil</a>

    <div class="card mt-5">
        <div class="card-body table-responsive">
            <table class="table table-borderless table-striped align-middle">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="width: 100px;">
                            <img class="img-fluid" src="images/gambar.png">
                        </th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#modalDelete" type="button" class="btn btn-danger btn-sm">Hapus</button>
                            <a href="/armada-show" type="button" class="btn btn-secondary btn-sm">Ubah</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeleteLabel">Yakin ingin menghapus data ini?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid mb-2" src="../images/gambar.png">
                    <h4>Title</h4>
                    <p>Harga</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-danger">Ya</button>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection() ?>