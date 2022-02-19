<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Barang
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted"><?= $barang['kode']; ?></h6>
                    <h5 class="card-title"><?= $barang['nama']; ?></h5>
                    <p class="card-text"><?= $barang['harga']; ?></p>
                    <a href="<?= base_url() ?>masuk" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>