<?= $this->extend('admin/master') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="container">
        <h4 class="text-secondary">Form Tambah Armada</h4>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" id="output" src="../images/gambar.png" alt="">
            </div>
            <div class="col-md-6">
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="image" onchange="loadFile(event)">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Armada</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Tarif</label>
                        <input type="number" class="form-control" id="harga">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori Armada</label>
                        <select class="form-select" id="kategori">
                            <option selected disabled>Pilih Kategori</option>
                            <option value="1">One</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>